<?php

namespace App\Http\Controllers;

use App\Models\Post;

class SitemapController extends Controller
{
    public function sitemap(){
        // $posts = Post::where('status', 2)->orderBy('id','desc')->get();

        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}
