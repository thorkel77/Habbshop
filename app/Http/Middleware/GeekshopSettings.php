<?php

namespace App\Http\Middleware;

use Closure;
use Voyager;
use Config;
use TCG\Voyager\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Arrilot\Widgets\Facade as Widget;

class GeekshopSettings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Schema::hasTable('settings')){
            // Set The Theme
            Config::set('geekshop.theme', setting('site.theme', 'default'));
            
            // And set the application name
            Config::set('app.name', setting('title'));
            if($request->is('admin/settings') && $request->isMethod('get')){
                $themes = Setting::where('key', '=', 'theme')->first();
                if(isset($themes->id)){
                    $themes->details = json_encode($this->get_themes());
                    $themes->save();
                }
            }

            if(setting('demo_mode', 0)){
                if(isset($request->theme)){
                    Config::set('geekshop.theme', $request->theme);
                    return $next($request)->withCookie('geekshop_theme', $request->theme);;
                }

                if($request->cookie('geekshop_theme')){
                    Config::set('geekshop.theme', $request->cookie('geekshop_theme'));
                }
            }
        }

        return $next($request);
    }

    private function get_themes(){
        $themes = array();
        $theme_folder = resource_path('/views/themes');
        
        $scandirectory = scandir($theme_folder);
        
        if($scandirectory == false){
        
            foreach($scandirectory as $folder){
                if(file_exists($theme_folder . '/' . $folder . '/home.blade.php')){
                    $themes[$folder] = $folder;
                }
            }
            
            $options['options'] = $themes;

        } else {
            $options['options'] = ['default' => 'default', 'white' => 'white'];
        }
        
        return (object)$options;
    }
}
