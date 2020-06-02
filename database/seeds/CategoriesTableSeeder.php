<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'name' => 'Gear & Gadgets',
                'description' => 'Checkout all the latest geeky Gear & Gadgets. We\'ve got all kinds of clothes and geeky gear for you to checkout and we\'ve also go the most high tech nerdy gadgets you\'ve just got to get your hands on.',
                'slug' => 'gear-gadgets',
                'created_at' => '2016-10-24 03:49:31',
                'updated_at' => '2016-11-09 23:40:23',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 3,
                'name' => 'Toys & Games',
                'description' => 'Still into Toys & Games? That\'s ok, we\'ve got an awesome collection of toys & games that will appeal to your nerdy side. You\'re never too old for some geeky and retro toys and games.',
                'slug' => 'toys-and-games',
                'created_at' => '2016-10-24 13:24:06',
                'updated_at' => '2016-11-10 00:04:05',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'order' => 4,
                'name' => 'Geeky Stuff',
                'description' => 'Are you a nerd? That\'s ok. Nerdy is the new cool. Check out all our geeky items that will satisfy all of your nerdiest desires.',
                'slug' => 'geeky-stuff',
                'created_at' => '2016-10-30 12:50:47',
                'updated_at' => '2016-11-10 00:05:10',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 0,
                'order' => 8,
                'name' => 'Gifts For Men',
                'description' => 'Looking for that perfect gift for your perfect man? Who doesn\'t love some geeky products or some geeky wall decor he can hang in his man cave.',
                'slug' => 'gifts-for-men',
                'created_at' => '2016-10-30 20:43:05',
                'updated_at' => '2016-11-10 00:07:43',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 0,
                'order' => 6,
                'name' => 'Home & Office',
                'description' => 'Need to geek out your home office. Checkout all these items we\'ve got for you to geek it out. Wall fixtures, desk war items, and so much more!',
                'slug' => 'home-and-office',
                'created_at' => '2016-11-07 16:10:26',
                'updated_at' => '2016-11-10 00:06:33',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 0,
                'order' => 2,
                'name' => 'Food & Drink',
                'description' => 'We\'ve got an awesome collection of food and drink items that we think you\'ll love. Prepare yourself for some delicious and not so delicious retro food and beverage items.',
                'slug' => 'food-and-drink',
                'created_at' => '2016-11-09 17:10:37',
                'updated_at' => '2016-11-10 00:03:09',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 0,
                'order' => 5,
                'name' => 'Under $20',
                'description' => 'Looking for some reasonably priced items. All these items are $20 or under. So, if you\'re on a budget you can still get some awesome items and products.',
                'slug' => 'under-20',
                'created_at' => '2016-11-09 17:11:49',
                'updated_at' => '2016-11-10 00:05:47',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 7,
                'name' => 'Wearables',
                'description' => 'Looking for the nerdiest wearable devices and clothing, well look no further we\'ve got you covered with our retro and geeky wearable products.',
                'slug' => 'wearables',
                'created_at' => '2016-11-09 17:12:16',
                'updated_at' => '2016-11-10 00:07:12',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 9,
                'name' => 'Gifts For Women',
                'description' => 'Looking for that perfect gift for your lady? Checkout our geeky and retro items for a perfect gift any women would love.',
                'slug' => 'gifts-for-women',
                'created_at' => '2016-11-09 17:12:59',
                'updated_at' => '2016-11-10 00:08:21',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 10,
                'name' => 'Gifts For Kids',
                'description' => 'Does your kid love some geeky and retro toys. Well checkout these products and items we have that would make the perfect gift for any kid.',
                'slug' => 'gifts-for-kids',
                'created_at' => '2016-11-09 17:13:31',
                'updated_at' => '2016-11-10 00:09:08',
            ),
        ));
        
        
    }
}