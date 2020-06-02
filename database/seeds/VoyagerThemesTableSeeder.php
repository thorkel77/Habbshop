<?php

use Illuminate\Database\Seeder;

class VoyagerThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('voyager_themes')->delete();
        
        \DB::table('voyager_themes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'DEFAULT',
                'folder' => 'default',
                'active' => 1,
                'version' => '1.1',
                'created_at' => '2017-12-06 13:54:37',
                'updated_at' => '2017-12-07 01:49:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'WHITE',
                'folder' => 'white',
                'active' => 0,
                'version' => '1.1',
                'created_at' => '2017-12-06 13:54:37',
                'updated_at' => '2017-12-07 01:49:34',
            ),
        ));
        
        
    }
}