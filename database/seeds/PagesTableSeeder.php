<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'title' => 'About',
                'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
                'body' => '<p>Geekshop is a premium Laravel Script which serves as an awesome affiliate/fun website that contains geeky products and items. This site is a clone of the many popular networks sites such as thisiswhyimbroke.com and shutupandtakemymoney.com.</p>
<p><img style="padding: 2px; border: 1px solid #eee;" src="/storage/pages/January2017/HXdusb8OstInhxDJggjj.jpg" alt="" width="100%" height="auto" /></p>
<p>To learn more about this script make sure to visit the product page or checkout the documentation.</p>',
                'image' => NULL,
                'slug' => 'About',
                'meta_description' => 'About Page',
                'meta_keywords' => 'about, about us',
                'status' => 'ACTIVE',
                'created_at' => '2016-12-09 16:23:00',
                'updated_at' => '2017-01-04 14:58:44',
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 1,
                'title' => 'Contact',
                'excerpt' => NULL,
                'body' => '<p>Thanks for visiting the contact page. We love hearing from our users and we love to help out in any way that we can. If you have any general questions about your account or even issues that you may have with the site please contact us below:</p>
<p><a href="mailto:email@email.com">email@email.com</a></p>
<p>&nbsp;</p>
<p>On the other hand if you would like to contact us with a suggested product that you think would be amazing on our site, please contact us by sending an email to:</p>
<p><a href="mailto:suggestions@email.com">suggestions@email.com</a></p>
<p>&nbsp;</p>
<p>If you have any legal matter that you would like to contact us about, please send an email to:</p>
<p><a href="mailto:legal@email.com">legal@email.com</a></p>
<p>&nbsp;</p>
<p>Thanks again and we look forward to hearing from you.</p>
<p>- The Team</p>',
                'image' => NULL,
                'slug' => 'contact',
                'meta_description' => 'Contact Us',
                'meta_keywords' => 'contact, contact page',
                'status' => 'ACTIVE',
                'created_at' => '2017-01-04 18:59:01',
                'updated_at' => '2017-01-04 18:59:01',
            ),
        ));
        
        
    }
}