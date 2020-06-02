<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'GeekShop',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'This is Why Your Broke',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings/October2016/AGUFY1pWMdZzD2SGwjVz.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 7,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/December2016/jNo5DpOfYKOBfjkp9Zbu.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 7,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 9,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'This is Why Your Broke',
                'details' => '',
                'type' => 'text',
                'order' => 6,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 10,
                'key' => 'site.product_slug',
            'display_name' => 'Product URL Slug (ex. \'/product/awesome-product\')',
                'value' => 'product',
                'details' => '',
                'type' => 'text',
                'order' => 9,
                'group' => 'Site',
            ),
            6 => 
            array (
                'id' => 11,
                'key' => 'site.theme',
                'display_name' => 'Theme',
                'value' => 'default',
                'details' => '{"options":{"default":"default","white":"white"}}',
                'type' => 'select_dropdown',
                'order' => 8,
                'group' => 'Site',
            ),
            7 => 
            array (
                'id' => 14,
                'key' => 'site.favicon',
                'display_name' => 'Favicon',
                'value' => 'settings/November2016/CdPaykFjgIRPH1hkEVFl.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            8 => 
            array (
                'id' => 15,
                'key' => 'site.category_slug',
            'display_name' => 'Category Slug (ex. site.com/category-slug/geeky-stuff)',
                'value' => 'category',
                'details' => '',
                'type' => 'text',
                'order' => 10,
                'group' => 'Site',
            ),
            9 => 
            array (
                'id' => 16,
                'key' => 'site.sidebar_ad',
                'display_name' => 'Sidebar Ad',
                'value' => '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img src="http://geekshop.dev/storage/settings/October2016/2fdf258defb5212d09c2a8fa40b04994.jpeg" style="width:100%; height:auto">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'details' => '',
                'type' => 'text_area',
                'order' => 12,
                'group' => 'Site',
            ),
            10 => 
            array (
                'id' => 17,
                'key' => 'site.comments',
                'display_name' => 'Comment Type',
                'value' => 'facebook',
                'details' => '{
"default": "facebook",
"options": {
"facebook": "Facebook Comments",
"disqus": "Disqus Comments"
}
}',
                'type' => 'select_dropdown',
                'order' => 13,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 18,
                'key' => 'site.disqus_short_name',
            'display_name' => 'Disqus Short Name (only needed if using disqus comments, find this in disqus admin)',
                'value' => 'geekshop',
                'details' => '',
                'type' => 'text',
                'order' => 14,
                'group' => 'Site',
            ),
            12 => 
            array (
                'id' => 19,
                'key' => 'site.custom_head_code',
            'display_name' => 'Custom Javascript or CSS (will be added to the head of the page)',
                'value' => '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ',
                'details' => '',
                'type' => 'text_area',
                'order' => 15,
                'group' => 'Site',
            ),
            13 => 
            array (
                'id' => 20,
                'key' => 'site.custom_footer_code',
            'display_name' => 'Custom Footer Javascript or CSS (will be added to the footer of the page)',
                'value' => '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'details' => '',
                'type' => 'text_area',
                'order' => 16,
                'group' => 'Site',
            ),
            14 => 
            array (
                'id' => 22,
                'key' => 'site.twitter_username',
                'display_name' => 'Twitter Username',
                'value' => 'thedevdojo',
                'details' => '',
                'type' => 'text',
                'order' => 17,
                'group' => 'Site',
            ),
            15 => 
            array (
                'id' => 23,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'GeekShop',
                'details' => '',
                'type' => 'text',
                'order' => 18,
                'group' => 'Admin',
            ),
            16 => 
            array (
                'id' => 24,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings/December2016/eFtrfl2HHiENkjS5C1mv.png',
                'details' => '',
                'type' => 'image',
                'order' => 19,
                'group' => 'Admin',
            ),
            17 => 
            array (
                'id' => 25,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings/December2016/1H62pcklHzC37QMDaF6I.png',
                'details' => '',
                'type' => 'image',
                'order' => 20,
                'group' => 'Admin',
            ),
            18 => 
            array (
                'id' => 26,
                'key' => 'site.require_email_validation',
                'display_name' => 'Require Users to Validate Email',
                'value' => '0',
                'details' => '',
                'type' => 'checkbox',
                'order' => 21,
                'group' => 'Site',
            ),
        ));
        
        
    }
}