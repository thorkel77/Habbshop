<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Voyager;

class CategoryController extends Controller
{
    public function read($category_slug){
    	$category = Category::where('slug', '=', $category_slug)->first();
    	$products = $category->products()->orderBy('created_at', 'DESC')->where('active', '=', 1)->paginate(15);
    	return view('theme::category', compact('products', 'category'));
    }
}
