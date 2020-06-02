<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$MUhevZq5Lk8iukV2D0IUkOzZVvynuEB/8.cDJZ1dwiuUeKt2kyqe6',
                'remember_token' => 'aMRosVkxfLAqN6Hw4T9Eo2A1NuxjUppGT9oKqdbJKuTio3dGuorp37WzdkfO',
                'activated' => 1,
                'created_at' => '2016-12-09 16:23:53',
                'updated_at' => '2017-02-08 00:08:47',
                'avatar' => 'users/default.png',
                'role_id' => 1,
            ),
        ));
        
        
    }
}