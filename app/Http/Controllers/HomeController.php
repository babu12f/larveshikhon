<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::where('status', 1)->paginate(20);

        return view('home.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        if(auth()->check())
        {
            if(!$post->status && auth()->user()->user_type !='admin') return back();
        }
        else
        {
            if(!$post->status ) return back();
        }

        return view('home.show', [
            'post' => $post,
        ]);
    }
}
