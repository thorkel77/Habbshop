<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Voyager;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->where('active', '=', 1)->paginate(15);
        $featured_products = Product::where('featured', '=', 1)->orderBy('created_at', 'DESC')->paginate(12);
        return view('theme::home', compact('products', 'featured_products'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $products = Product::where('title', 'LIKE', '%' . $search . '%')->where('active', '=', 1)->orderBy('created_at', 'DESC')->paginate(30);
        return view('theme::home', compact('products', 'search'));
    }

    public function rss(){

        $products = Product::orderBy('created_at', 'DESC')->take(100)->get();
        return response()->view('shared.rss', compact('products'))->header('Content-Type', 'application/xml');

    }
}
