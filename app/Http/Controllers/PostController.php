<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;
use Voyager;

class PostController extends Controller
{
    public function browse(){
    	$posts = Post::where('status', '=', 'PUBLISHED')->orderBy('created_at', 'DESC')->paginate(10);
    	$products = Product::orderBy('created_at', 'DESC')->where('active', '=', 1)->take(5)->get();
    	return view('theme::posts.browse', compact('posts', 'products'));
    }

    public function read($slug){
    	$post = Post::where('slug', '=', $slug)->firstOrFail();
        $random_posts = Post::inRandomOrder()->where('id', '<>', $post->id)->take(4)->get();

        // SEO Content for the page
        $seo_title = $post->title;
        $meta_description = $post->meta_description;
        $meta_keywords = $post->meta_keywords;
        $twitter_description = $post->meta_description;
        $og_title = $seo_title;
        $og_image = url(Voyager::image($post->image));

    	return view('theme::posts.read', compact('post', 'random_posts', 'seo_title', 'meta_description', 'meta_keywords', 'twitter_description', 'og_title', 'og_image'));
    }
}
