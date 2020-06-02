<?php

use Illuminate\Database\Seeder;

class ProductProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_product')->delete();
        
        \DB::table('product_product')->insert(array (
            0 => 
            array (
                'product_id' => 6,
                'product2_id' => 4,
            ),
            1 => 
            array (
                'product_id' => 6,
                'product2_id' => 13,
            ),
            2 => 
            array (
                'product_id' => 6,
                'product2_id' => 31,
            ),
            3 => 
            array (
                'product_id' => 20,
                'product2_id' => 40,
            ),
            4 => 
            array (
                'product_id' => 20,
                'product2_id' => 41,
            ),
            5 => 
            array (
                'product_id' => 20,
                'product2_id' => 42,
            ),
            6 => 
            array (
                'product_id' => 40,
                'product2_id' => 20,
            ),
            7 => 
            array (
                'product_id' => 40,
                'product2_id' => 40,
            ),
            8 => 
            array (
                'product_id' => 40,
                'product2_id' => 41,
            ),
            9 => 
            array (
                'product_id' => 41,
                'product2_id' => 20,
            ),
            10 => 
            array (
                'product_id' => 41,
                'product2_id' => 40,
            ),
            11 => 
            array (
                'product_id' => 41,
                'product2_id' => 41,
            ),
            12 => 
            array (
                'product_id' => 42,
                'product2_id' => 20,
            ),
            13 => 
            array (
                'product_id' => 42,
                'product2_id' => 40,
            ),
            14 => 
            array (
                'product_id' => 42,
                'product2_id' => 41,
            ),
        ));
        
        
    }
}