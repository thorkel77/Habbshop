<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_product')->delete();
        
        \DB::table('category_product')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'product_id' => 1,
            ),
            1 => 
            array (
                'category_id' => 1,
                'product_id' => 3,
            ),
            2 => 
            array (
                'category_id' => 1,
                'product_id' => 10,
            ),
            3 => 
            array (
                'category_id' => 2,
                'product_id' => 2,
            ),
            4 => 
            array (
                'category_id' => 2,
                'product_id' => 15,
            ),
            5 => 
            array (
                'category_id' => 2,
                'product_id' => 32,
            ),
            6 => 
            array (
                'category_id' => 2,
                'product_id' => 33,
            ),
            7 => 
            array (
                'category_id' => 3,
                'product_id' => 4,
            ),
            8 => 
            array (
                'category_id' => 3,
                'product_id' => 5,
            ),
            9 => 
            array (
                'category_id' => 3,
                'product_id' => 6,
            ),
            10 => 
            array (
                'category_id' => 3,
                'product_id' => 13,
            ),
            11 => 
            array (
                'category_id' => 3,
                'product_id' => 14,
            ),
            12 => 
            array (
                'category_id' => 3,
                'product_id' => 19,
            ),
            13 => 
            array (
                'category_id' => 3,
                'product_id' => 40,
            ),
            14 => 
            array (
                'category_id' => 3,
                'product_id' => 41,
            ),
            15 => 
            array (
                'category_id' => 3,
                'product_id' => 42,
            ),
            16 => 
            array (
                'category_id' => 4,
                'product_id' => 7,
            ),
            17 => 
            array (
                'category_id' => 4,
                'product_id' => 8,
            ),
            18 => 
            array (
                'category_id' => 4,
                'product_id' => 9,
            ),
            19 => 
            array (
                'category_id' => 5,
                'product_id' => 6,
            ),
            20 => 
            array (
                'category_id' => 5,
                'product_id' => 11,
            ),
            21 => 
            array (
                'category_id' => 5,
                'product_id' => 12,
            ),
            22 => 
            array (
                'category_id' => 6,
                'product_id' => 16,
            ),
            23 => 
            array (
                'category_id' => 6,
                'product_id' => 17,
            ),
            24 => 
            array (
                'category_id' => 6,
                'product_id' => 18,
            ),
            25 => 
            array (
                'category_id' => 6,
                'product_id' => 20,
            ),
            26 => 
            array (
                'category_id' => 6,
                'product_id' => 21,
            ),
            27 => 
            array (
                'category_id' => 6,
                'product_id' => 31,
            ),
            28 => 
            array (
                'category_id' => 7,
                'product_id' => 22,
            ),
            29 => 
            array (
                'category_id' => 7,
                'product_id' => 23,
            ),
            30 => 
            array (
                'category_id' => 7,
                'product_id' => 24,
            ),
            31 => 
            array (
                'category_id' => 7,
                'product_id' => 36,
            ),
            32 => 
            array (
                'category_id' => 8,
                'product_id' => 37,
            ),
            33 => 
            array (
                'category_id' => 8,
                'product_id' => 38,
            ),
            34 => 
            array (
                'category_id' => 8,
                'product_id' => 39,
            ),
            35 => 
            array (
                'category_id' => 9,
                'product_id' => 25,
            ),
            36 => 
            array (
                'category_id' => 9,
                'product_id' => 26,
            ),
            37 => 
            array (
                'category_id' => 9,
                'product_id' => 27,
            ),
            38 => 
            array (
                'category_id' => 9,
                'product_id' => 28,
            ),
            39 => 
            array (
                'category_id' => 9,
                'product_id' => 29,
            ),
            40 => 
            array (
                'category_id' => 9,
                'product_id' => 30,
            ),
            41 => 
            array (
                'category_id' => 10,
                'product_id' => 34,
            ),
            42 => 
            array (
                'category_id' => 10,
                'product_id' => 35,
            ),
            43 => 
            array (
                'category_id' => 10,
                'product_id' => 36,
            ),
        ));
        
        
    }
}