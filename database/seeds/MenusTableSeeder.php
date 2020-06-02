<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'main',
                'created_at' => '2016-05-19 18:31:14',
                'updated_at' => '2016-05-19 18:31:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'created_at' => '2016-05-19 19:55:51',
                'updated_at' => '2016-12-11 19:22:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'category_menu',
                'created_at' => '2016-11-09 21:03:32',
                'updated_at' => '2016-11-09 21:03:32',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'footer_menu',
                'created_at' => '2017-01-04 16:03:12',
                'updated_at' => '2017-01-04 16:03:12',
            ),
        ));
        
        
    }
}