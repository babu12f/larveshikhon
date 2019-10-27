<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Comment;
use App\Mail\ConfirmOrder;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $post->load(['comments', 'comments.likes', 'comments.owner']);

        return view('home.show', [
            'post' => $post,
        ]);
    }

    public function genReport()
    {
        $cat = Category::all();

        $pdf = PDF::loadView('invoice', [
            'cat'=>$cat
        ]);
        return $pdf->download('invoice.pdf');
    }

    public function query()
    {
        $users = Comment::inRandomOrder()->get()->take(3);

        return $users;
    }

    public function mail()
    {
        return (new ConfirmOrder())->render();
    }
}
