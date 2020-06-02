<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Voyager;

class ProductController extends Controller
{
    public function read($slug){
    	$product = Product::where('slug', '=', $slug)->where('active', '=', 1)->firstOrFail();

    	// SEO Content for the page
    	$seo_title = $product->title;
    	$meta_description = $product->meta_description;
    	$meta_keywords = $product->meta_keywords;
		$twitter_description = $product->meta_description;
    	$og_title = $seo_title;
    	$og_image = url(Voyager::image($product->image));

    	return view('theme::product.read', compact('product', 'seo_title', 'meta_description', 'meta_keywords', 'twitter_description', 'og_title', 'og_image'));
    }

    public function updateRelated(Request $request){
        if(Voyager::can('edit_products')){
            $product = Product::findOrFail($request->id);
            $product->belongsToMany('App\Product', 'product_product', 'product_id', 'product2_id')->sync((array)$request->related);
            return response()->json(1);
        }
        return response()->json(0);
    }
}
