<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 5,
                'author_id' => 1,
                'title' => 'Quick Test Post',
                'seo_title' => NULL,
            'excerpt' => 'This is just a sample post to show you some of the functionality of Geekshop. You\'re going to have so much fun customizing the site and making it your own :)',
        'body' => '<p>Hey There this is a quick test :)</p>
<p>This is just a sample post to show you some of the functionality of Geekshop. You\'re going to have so much fun customizing the site and making it your own :)</p>
<p><img src="/storage/posts/February2017/jDYXBSIsqpXtJUSL6Lhz.png" alt="" width="800" height="600" /></p>
<p>&nbsp;</p>',
    'image' => 'posts/February2017/G7WXhgJBDO8TveMDITpb.jpg',
    'slug' => 'quick-test-post',
    'meta_description' => 'Quick Test Post',
    'meta_keywords' => 'key1, key2, key3                                                                    ',
    'status' => 'PUBLISHED',
    'created_at' => '2017-02-03 14:30:00',
    'updated_at' => '2017-02-03 14:30:00',
),
1 => 
array (
    'id' => 6,
    'author_id' => 1,
    'title' => 'Another Quick Test Post',
    'seo_title' => NULL,
'excerpt' => 'This is just a quick test to show you some of the functionality of Geekshop :)',
'body' => '<p>&nbsp;</p>
<p>This is yet another quick test post :)</p>
<p>Thanks for checking out Geekshop. You\'ll have so much fun customizing this website and making it your own.</p>
<p><img src="/storage/posts/February2017/jDYXBSIsqpXtJUSL6Lhz.png" alt="" width="800" height="600" /></p>',
'image' => 'posts/February2017/YyqPl6MQoDm8L3YDPOSK.jpg',
'slug' => 'another-quick-test-post',
'meta_description' => 'This is another quick test',
'meta_keywords' => 'meta keyword 1, meta Keyword 2',
'status' => 'PUBLISHED',
'created_at' => '2017-02-03 14:26:00',
'updated_at' => '2017-02-03 14:26:00',
),
2 => 
array (
'id' => 7,
'author_id' => 1,
'title' => 'Gift Ideas for That Star Wars Fan',
'seo_title' => NULL,
'excerpt' => 'Looking for some gifts for that star wars fan in your life. Checkout this rundown of gift ideas we\'ve got for you.',
'body' => '<p>If you are looking for some gifts for that star wars fan in your life you\'ve got to checkout these awesome gift ideas below:</p>
<h3>Star Wars Tie Fighter Desk</h3>
<p><a href="http://www.roomstogokids.com/product/Special/AsAdvertised/36111615/" target="_blank"><img src="/storage/products/October2016/eBwADt9Ebd43I3V6pbZb.jpg" alt="" width="640" height="534" /></a></p>
<h3>Star Wars Darth Vader Mister</h3>
<p><a href="https://www.amazon.com/dp/B011BD7GUG/" target="_blank"><img src="/storage/products/October2016/OYtI1fiCmQ3N7zNzYi3i.jpg" alt="" width="640" height="533" /></a></p>
<h3>Darth Vader USB Charger</h3>
<p><a href="http://www.thinkgeek.com/product/iqih/" target="_blank"><img src="/storage/products/November2016/zXAUVLQLrH1m7WzGL3Vh.jpg" alt="" width="550" height="550" /></a></p>
<h3>Darth Vader Fire Pit</h3>
<p><a href="https://www.etsy.com/listing/263087928/darth-vader-star-wars-inspired-wood" target="_blank"><img src="/storage/products/October2016/oBI8OUMQ3paP3QzeKiqN.jpg" alt="" width="449" height="374" /></a></p>
<h3>R2D2 Mini Fridge</h3>
<p><a href="http://www.thinkgeek.com/product/ipsi/" target="_blank"><img src="/storage/products/November2016/oM3IaPpFGnJ1hqD4gCy9.jpg" alt="" width="600" height="600" /></a></p>
<p>Hope you enjoyed this round up of Star Wars Gift Ideas. For more awesome gift ideas and geeky stuff be sure to checkout the rest of our geek products.</p>',
'image' => 'posts/February2017/XU7j7SVo0YAt9Lxwy4aB.jpg',
'slug' => 'gifts-for-geeks',
'meta_description' => 'Gift Ideas for That Star Wars Fan',
'meta_keywords' => 'Star Wars, Gifts, Gift Ideas',
'status' => 'PUBLISHED',
'created_at' => '2017-02-03 14:52:02',
'updated_at' => '2017-02-03 14:52:02',
),
3 => 
array (
'id' => 8,
'author_id' => 1,
'title' => 'Everyone loves Geeky Gifts',
'seo_title' => NULL,
'excerpt' => 'Everyone loves a geeky gift. Checkout these awesome pictures of geeky gifts to get some inspiration',
'body' => '<p>Everyone loves a geeky gift. Checkout these awesome pictures of geeky gifts to get some inspiration:</p>
<p><img src="/storage/posts/February2017/Xm5lq6L5jG2XTaNuZxds.jpg" alt="" width="1024" height="448" /></p>
<p><img src="/storage/posts/February2017/E3wTVzchKDwbtZnYhxyf.jpg" alt="" width="1122" height="532" /></p>
<p><img src="/storage/posts/February2017/vmqW5Nvb9I9W18k4yfYf.jpg" alt="" width="1024" height="562" /></p>
<p><img src="/storage/posts/February2017/kiy7i50LSK6mKrKZdhJE.jpg" alt="" width="1024" height="405" /></p>
<p><img src="/storage/posts/February2017/kuDy4371zpn75DSEWigL.jpg" alt="" width="1024" height="521" /></p>
<p><img src="/storage/posts/February2017/T8btaMi8Ju3Li7r028Vo.jpg" alt="" width="1024" height="530" /></p>
<p><img src="/storage/posts/February2017/dOGtrvhtDIc5uWnIb6uc.jpg" alt="" width="1024" height="835" /></p>
<p><img src="/storage/posts/February2017/Wkk1vY3iVnYUirMok73S.jpg" alt="" width="1024" height="787" /></p>',
'image' => 'posts/February2017/6dzsaczVnig8vkzgkN5F.jpg',
'slug' => 'everyone-loves-geeky-gifts',
'meta_description' => 'Everyone loves Geeky Gifts',
'meta_keywords' => 'geeky gifts, gifts',
'status' => 'PUBLISHED',
'created_at' => '2017-02-03 15:03:02',
'updated_at' => '2017-02-03 15:03:02',
),
4 => 
array (
'id' => 9,
'author_id' => 1,
'title' => 'Awesome Geeky Toy Ideas',
'seo_title' => NULL,
'excerpt' => 'Checkout these awesome geeky toy ideas for the next holiday season.',
'body' => '<p>Here are some awesome Geeky Toy ideas to get for someone who loves geeky things. Check out all the items below:</p>
<h3>Tiny Playable Arcade Machines</h3>
<p><a href="https://www.kickstarter.com/projects/kenburns/tiny-arcade-a-retro-tiny-playable-game-cabinet/description" target="_blank"><img src="http://geekshop.dev/storage/products/November2016/ChfaKNM09Mz5XFLirlY0.jpg" alt="" width="640" height="533" /></a></p>
<h3>The Simpsons Lego Kwik-E-Mart</h3>
<p><a href="https://www.amazon.com/dp/B00W677IOQ/" target="_blank"><img src="http://geekshop.dev/storage/products/November2016/ovLnUAgMRjB9hYGkFbmR.jpg" alt="" width="640" height="533" /></a></p>
<h3>Retro Gaming System</h3>
<p><a href="https://www.amazon.com/gp/product/B00DZIX394/" target="_blank"><img src="http://geekshop.dev/storage/products/November2016/Ecx0HqsanLX0ihKG8Ahs.jpg" alt="" width="600" height="600" /></a></p>
<h3>Programming Language Playing Cards</h3>
<p><a href="http://geekshop.dev/product/programming-language-playing-cards" target="_blank"><img src="http://geekshop.dev/storage/products/October2016/FD0mUhx4feCnzvuttTAH.jpg" alt="" width="700" height="394" /></a></p>',
'image' => 'posts/February2017/FzHN1r7rNGQV0KaSqfG2.jpg',
'slug' => 'geeky-toy-ideas',
'meta_description' => 'Awesome Geeky Toy Ideas',
'meta_keywords' => 'geeky toys, toys',
'status' => 'PUBLISHED',
'created_at' => '2017-02-03 14:36:00',
'updated_at' => '2017-02-04 14:59:03',
),
5 => 
array (
'id' => 10,
'author_id' => 1,
'title' => 'Nintendo Gift Ideas',
'seo_title' => NULL,
'excerpt' => 'Checkout these awesome nintendo gifts including an nes cartridge flash, bed set, and hand held device.',
'body' => '<p>Checkout these awesome Nintendo gift ideas :)</p>
<h3>Portable Nintendo Player</h3>
<p><a href="https://www.amazon.com/dp/B005GSRPG8/" target="_blank"><img src="http://geekshop.dev/storage/products/January2017/1jVlliZFiLNPgSEsFBHt.jpg" alt="" width="511" height="426" /></a></p>
<h3>Nintendo Game Cartridge Flask</h3>
<p><a href="http://www.inkwhiskey.com/products/drunk-hunt" target="_blank"><img src="http://geekshop.dev/storage/products/November2016/0IWWGuU4Q0gpApb1nDwk.jpg" alt="" width="550" height="550" /></a></p>
<h3>Nintendo Bed Set</h3>
<p><a href="http://geekshop.dev/product/nintendo-bed-set"><img src="http://geekshop.dev/storage/products/January2017/zuAAMZvTW9dqruf1gVKU.jpg" alt="" width="640" height="533" /></a></p>',
'image' => 'posts/February2017/6SRhYVDVQId53zs7THSd.jpg',
'slug' => 'nintendo-gift-ideas',
'meta_description' => 'Nintendo Gift Ideas',
'meta_keywords' => 'Nintendo, Gifts',
'status' => 'PUBLISHED',
'created_at' => '2017-02-03 14:45:00',
'updated_at' => '2017-02-03 14:45:00',
),
));
        
        
    }
}