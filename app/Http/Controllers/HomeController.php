<?php

namespace App\Http\Controllers;

use App\post;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        $post = Post::all();
        /* dd($post); */
        /* $posts = Post::all(); */
        return view('blog', compact ('post'));
    }
}
