<?php

namespace GeekshopPriceAutoUpdater;

use Illuminate\Support\ServiceProvider;

class GeekshopPriceAutoUpdaterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        return;

    $artNr = "B005GSRPG8";
    $base_url = "http://webservices.amazon.com/onca/xml";
    $params = array(
        'AWSAccessKeyId' => 'AKIAITMOY7SAU7Z7C76A',
        'AssociateTag' => 'geekshop',
        'Operation' => "ItemLookup",
        'Service' => "AWSECommerceService",
        'ResponseGroup' => "Offers",
        'Condition' => "All",
        'IdType' => 'ASIN',
        'ItemId' => $artNr);

    // GET KEYS!!!
    // LOGIN OR CREATE ACCOUNT ON https://affiliate-program.amazon.com
    // AFTER THAT SELECT "PRODUCT ADVERTISING API" UNDER THE "TOOLS" MENU ITEM
    // on that page click "Manage Your Account".
    // on that page clikc on "AWS Security Credentials Console"
    // IF YOU ARE ASKED TO LOGIN OR SIGNUP, make sure you login or signup with the same email that was used the the affiliate program account.
    // Once you are logged in, if there is a popup, click on "Continue to Security Credentials".
    // Then click on "Access Keys (Access Key ID and Secret Access Key)".
    // Then click "Create New Access Key"
    // Then click "Show Access Key"

    $params['Timestamp'] = gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());

    $url_parts = array();
    foreach(array_keys($params) as $key)
        $url_parts[] = $key . "=" . str_replace('%7E', '~', rawurlencode($params[$key]));
    sort($url_parts);

    $url_string = implode("&", $url_parts);
    $string_to_sign = "GET\nwebservices.amazon.com\n/onca/xml\n" . $url_string;

    $signature = hash_hmac("sha256", $string_to_sign, '1ZMMFNGfoibuaWO5lq6mrf01nrrMQxFZTiqM4EZk', TRUE);

    $signature = urlencode(base64_encode($signature));

    $url = $base_url . '?' . $url_string . "&Signature=" . $signature;

    $response = file_get_contents($url);
    $parsed_xml = simplexml_load_string($response);

    $price = (int) $parsed_xml->Items->Item->OfferSummary->LowestNewPrice->Amount;

    dd($price);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->registerConsoleCommands();
        }

        $this->registerConfigs();
        $this->registerPublishableResources();
    }

    /**
     * Register the publishable files.
     */
    private function registerPublishableResources()
    {
        $basePath = dirname(__DIR__);
        $publishable = [
            /*
            'voyager_assets' => [
                "$basePath/publishable/assets" => public_path('vendor/tcg/voyager/assets'),
            ],
            'migrations' => [
                "$basePath/publishable/database/migrations/" => database_path('migrations'),
            ],
            'seeds' => [
                "$basePath/publishable/database/seeds/" => database_path('seeds'),
            ],
            'demo_content' => [
                "$basePath/publishable/demo_content/" => storage_path('app/public'),
            ],
            */
            'config' => [
                "$basePath/../publishable/config/geekshop-price-auto-updater.php" => config_path('geekshop-price-auto-updater.php'),
            ],
        ];

        foreach ($publishable as $group => $paths) {
            //$this->publishes($paths, $group);
        }
    }

    public function registerConfigs()
    {
        $this->mergeConfigFrom(
            realpath(__DIR__.'/../publishable/config/geekshop-price-auto-updater.php'), 'geekshop-price-auto-updater'
        );
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(Commands\UpdatePriceCommand::class);
    }
}
