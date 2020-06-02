<?php

namespace GeekshopPriceAutoUpdater\Sources\Amazon;

use App\Product;
use Carbon\Carbon;
use Illuminate\Foundation\Application;
use Illuminate\Database\Eloquent\Collection;
use GeekshopPriceAutoUpdater\Output;
use Illuminate\Config\Repository;
use GeekshopPriceAutoUpdater\Sources\Amazon\Locales;

class Amazon
{
	protected $app;
	protected $config;
	protected $messages = [];

	protected static $hosts = [
		//'amazon.ca' => Locales\CA::class,
		'amazon.com' => Locales\US::class,
		//'amazon.fr' => Locales\FR::class,
		//'amazon.it' => Locales\IT::class,
		//'amazon.cn' => Locales\CN::class,
		'amazon.es' => Locales\ES::class,
		//'amazon.in' => Locales\IN::class,
		//'amazon.br' => Locales\BR::class,
		//'amazon.mx' => Locales\MX::class,
		//'amazon.co.jp' => Locales\JP::class,
		//'amazon.co.uk' => Locales\UK::class,
		//'amazon.de' => Locales\DE::class,
	];

	public function __construct(Application $app)
	{
		$this->app = $app;
		$this->config = new Repository($app->config->get('geekshop-price-auto-updater.amazon', []));
	}

	public function updatePrices(Collection $products)
	{
		if (!$this->config->get('enabled')) {
			return Output::line('Amazon not enabled');
		}

		$products->filter(function (Product $product) {
			return $this->validSource($product);
		})->each(function (Product $product) use (&$messages) {
			if ($price = $this->getProductPrice($product, /* $tries = */ 5, /* $wait = */ 1)) {
				$product->forceFill([
					'price' => (float) $price,
				])->save();

				Output::info("Product #{$product->id} [NO: {$this->getItemId($product)}] have been updated from Amazon!");
			}
		});
	}

	public function getProductPrice(Product $product, $tries = 1, $wait = 0)
	{
		$itemId = $this->getItemId($product);
		$failed = "Product #{$product->id} [NO: {$itemId}] failed to update from Amazon!";

		$host = $this->getHost($product);

		if (!isset(static::$hosts[$host])) {
			Output::error("Host [{$host}] not supported! Please contact supporter to add support for this.");
			Output::line($failed);

			return false;
		}

		$locale = app(static::$hosts[$host]);
		$hostKey = str_replace('.', '_', $host);

		if (!$this->config->get("hosts.{$hostKey}.enabled")) {
			Output::line("Amazon host [{$host}] not enabled");
			return false;
		}
	    
		$accessKey = $this->config->get("hosts.{$hostKey}.access_key");
		if (empty($accessKey)) {
			Output::error("Missing [access_key] for host Amazon [{$host}]!");
			Output::line($failed);

			return false;
		}
	    
		$secretKey = $this->config->get("hosts.{$hostKey}.secret_key");
		if (empty($secretKey)) {
			Output::error("Missing [secret_key] for Amazon host [{$host}]!");
			Output::line($failed);

			return false;
		}
	    
		$associateTag = $this->config->get("hosts.{$hostKey}.associate_tag");
		if (empty($associateTag)) {
			Output::error("Missing [associate_tag] for Amazon host [{$host}]!");
			Output::line($failed);

			return false;
		}

		try {
			return $this->fetchProductPrice($product);
		} catch (\ErrorException $e) {
			$tries--;

			if ($tries) {
				Output::line("Failed updating product #{$product->id} [NO: {$itemId}]! Trying again...");
				sleep($wait);

				return $this->getProductPrice($product, $tries, $wait);
			}
			
			Output::error($e->getMessage());

			return false;
		}
	}

	protected function fetchProductPrice(Product $product)
	{
		$itemId = $this->getItemId($product);
		$failed = "Product #{$product->id} [NO: {$itemId}] failed to update from Amazon!";

		$host = $this->getHost($product);

		$locale = app(static::$hosts[$host]);
		$hostKey = str_replace('.', '_', $host);
	    
		$accessKey = $this->config->get("hosts.{$hostKey}.access_key");
		$secretKey = $this->config->get("hosts.{$hostKey}.secret_key");
		$associateTag = $this->config->get("hosts.{$hostKey}.associate_tag");

	    $params = [
	        'AWSAccessKeyId' => $accessKey,
	        'AssociateTag' => $associateTag,
	        'Operation' => "ItemLookup",
	        'Service' => "AWSECommerceService",
	        'ResponseGroup' => "Offers",
	        'Condition' => "All",
	        'IdType' => 'ASIN',
	        'ItemId' => $itemId,
	        'Timestamp' => Carbon::now()->format('Y-m-d\TH:i:s.000\Z'),
	    ];
	    ksort($params);

	    // GET KEYS!!!
	    // LOGIN OR CREATE ACCOUNT ON https://affiliate-program.amazon.com
	    // AFTER THAT SELECT "PRODUCT ADVERTISING API" UNDER THE "TOOLS" MENU ITEM
	    // on that page click "Manage Your Account".
	    // on that page click on "AWS Security Credentials Console"
	    // IF YOU ARE ASKED TO LOGIN OR SIGNUP, make sure you login or signup with the same email that was used the the affiliate program account.
	    // Once you are logged in, if there is a popup, click on "Continue to Security Credentials".
	    // Then click on "Access Keys (Access Key ID and Secret Access Key)".
	    // Then click "Create New Access Key"
	    // Then click "Show Access Key"

	    $queryString = http_build_query($params);
	    $signature = $this->buildSignature($locale, $queryString, $hostKey);

	    $url = $locale->getEndPoint() . '?' . $queryString . "&Signature=" . $signature;

		$response = file_get_contents($url);

	    $xml = simplexml_load_string($response);

	    $price = (int) $xml->Items->Item->OfferSummary->LowestNewPrice->Amount;

		return $price / 100;
	}

	protected function buildSignature(Locales\BaseLocale $locale, $queryString, $key)
	{
		$queryString = str_replace(',','%2C', $queryString);

        $queryString = str_replace(':','%3A', $queryString);

        $queryStringArray = explode('&', $queryString);

        ksort($queryStringArray);

        $queryString = implode('&', $queryStringArray);

        $queryString = $locale->getRequestSignatureString().$queryString;

        return base64_encode(
        	hash_hmac(
        		"sha256",
        		$queryString,
        		$this->config->get("hosts.{$key}.secret_key"),
        		true
        	)
        );
	}

	protected function getItemId(Product $product)
	{
		$purchaseUrl = $product->purchase_url;

		if (!filter_var($purchaseUrl, FILTER_VALIDATE_URL)) {
			return false;
		}

		$parts = parse_url($purchaseUrl);

		if (preg_match("/^\/dp\/([^\/]+)(\/?)(.+)$/", $parts['path'])) {
			return explode('/', $parts['path'])[2];
		}

		if (preg_match("/^\/([^\/]+)\/dp\/([^\/]+)(\/?)(.+)$/", $parts['path'])) {
			return explode('/', $parts['path'])[3];
		}
	}

	protected function getHost(Product $product)
	{
		$purchaseUrl = $product->purchase_url;

		if (!filter_var($purchaseUrl, FILTER_VALIDATE_URL)) {
			return false;
		}

		$parts = parse_url($purchaseUrl);

		if (starts_with($parts['host'], 'www.')) {
			$parts['host'] = substr($parts['host'], 4);
		}

		if (!in_array($parts['host'], array_keys(static::$hosts))) {
			return false;
		}

		return $parts['host'];
	}

	public function validSource(Product $product)
	{
		$purchaseUrl = $product->purchase_url;

		if (!filter_var($purchaseUrl, FILTER_VALIDATE_URL)) {
			return false;
		}

		$parts = parse_url($purchaseUrl);

		if (!in_array($parts['scheme'], ['http', 'https'])) {
			return false;
		}

		if (!$host = $this->getHost($product)) {
			return false;
		}

		return $this->getItemId($product);
	}
}
