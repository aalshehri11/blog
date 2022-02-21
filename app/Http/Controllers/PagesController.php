<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        // return view('index');
        
        // We pass the latest post to home page
        $latestPost = Post::latest()->first();
        return view('index')->with('latestPost', $latestPost);

        // We pass 4 latest posts to home page
        // $latestPosts = Post::latest()->take(4)->get();
    }
}
