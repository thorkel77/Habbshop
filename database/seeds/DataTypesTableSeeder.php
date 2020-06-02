<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2016-12-27 16:55:12',
                'updated_at' => '2016-12-27 16:55:12',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2016-02-02 02:37:02',
                'updated_at' => '2016-10-21 23:05:16',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2016-01-27 19:43:51',
                'updated_at' => '2016-10-21 22:55:41',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Category',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => NULL,
                'updated_at' => '2016-12-28 14:01:04',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => NULL,
                'updated_at' => '2016-06-29 00:09:35',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2016-10-21 22:09:45',
                'updated_at' => '2016-10-21 22:09:45',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-bag',
                'model_name' => 'App\\Product',
                'controller' => NULL,
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2016-10-24 03:44:52',
                'updated_at' => '2016-10-24 03:44:52',
            ),
        ));
        
        
    }
}