<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Product;
use Auth;
use App\Notification\EmailActivation;
use TCG\Voyager\Models\User as VoyagerUser;

class User extends VoyagerUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function saved_product($product_id){
        if(!Auth::guest()){
             $saved = Auth::user()->saves->contains($product_id);
        }
        if(isset($saved) && isset($saved->id)){
            return true;
        } else {
            return false;
        }
    }

    public function saves(){
        return $this->belongsToMany('App\Product', 'product_saves')->withTimestamps();
    }
}
