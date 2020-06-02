<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Voyager;

class PageController extends Controller
{

    /**
     * Show the page.
     *
     */
    public function read($slug)
    {
        $page = Page::where('slug', '=', $slug)->first();
        return view('theme::page', compact('page'));
    }

}
