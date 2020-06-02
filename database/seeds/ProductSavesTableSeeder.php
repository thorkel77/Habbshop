<?php

use Illuminate\Database\Seeder;

class ProductSavesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_saves')->delete();
        
        \DB::table('product_saves')->insert(array (
            0 => 
            array (
                'product_id' => 14,
                'user_id' => 1,
                'created_at' => '2017-02-04 19:05:51',
                'updated_at' => '2017-02-04 19:05:51',
            ),
            1 => 
            array (
                'product_id' => 34,
                'user_id' => 1,
                'created_at' => '2017-02-04 18:40:59',
                'updated_at' => '2017-02-04 18:40:59',
            ),
            2 => 
            array (
                'product_id' => 37,
                'user_id' => 1,
                'created_at' => '2017-12-06 15:19:13',
                'updated_at' => '2017-12-06 15:19:13',
            ),
            3 => 
            array (
                'product_id' => 41,
                'user_id' => 1,
                'created_at' => '2017-12-06 15:19:11',
                'updated_at' => '2017-12-06 15:19:11',
            ),
        ));
        
        
    }
}