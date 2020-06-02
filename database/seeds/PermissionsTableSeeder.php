<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => 'admin',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => 'admin',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => 'admin',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_settings',
                'table_name' => 'admin',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            24 => 
            array (
                'id' => 30,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            25 => 
            array (
                'id' => 31,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2016-12-09 16:23:52',
                'updated_at' => '2016-12-09 16:23:52',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2016-12-11 19:12:47',
                'updated_at' => '2016-12-11 19:12:47',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2016-12-11 19:12:47',
                'updated_at' => '2016-12-11 19:12:47',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2016-12-11 19:12:47',
                'updated_at' => '2016-12-11 19:12:47',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2016-12-11 19:12:47',
                'updated_at' => '2016-12-11 19:12:47',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2016-12-11 19:12:47',
                'updated_at' => '2016-12-11 19:12:47',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'browse_hooks',
                'table_name' => 'admin',
                'created_at' => '2017-09-18 21:55:03',
                'updated_at' => '2017-09-18 21:55:03',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2017-10-19 07:58:07',
                'updated_at' => '2017-10-19 07:58:07',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2017-10-19 07:58:07',
                'updated_at' => '2017-10-19 07:58:07',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2017-10-19 07:58:07',
                'updated_at' => '2017-10-19 07:58:07',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2017-10-19 07:58:07',
                'updated_at' => '2017-10-19 07:58:07',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2017-10-19 07:58:07',
                'updated_at' => '2017-10-19 07:58:07',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'browse_themes',
                'table_name' => 'admin',
                'created_at' => '2017-12-06 13:36:02',
                'updated_at' => '2017-12-06 13:36:02',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'read_settings',
                'table_name' => 'admin',
                'created_at' => '2017-12-06 13:36:02',
                'updated_at' => '2017-12-06 13:36:02',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'edit_settings',
                'table_name' => 'admin',
                'created_at' => '2017-12-06 13:36:02',
                'updated_at' => '2017-12-06 13:36:02',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'add_settings',
                'table_name' => 'admin',
                'created_at' => '2017-12-06 13:36:02',
                'updated_at' => '2017-12-06 13:36:02',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'delete_settings',
                'table_name' => 'admin',
                'created_at' => '2017-12-06 13:36:02',
                'updated_at' => '2017-12-06 13:36:02',
            ),
        ));
        
        
    }
}