<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate(['body' => 'required|min:3|max:200']);

        $post->comments()->create([
            'body' => request('body'),
            'user_id' => 1
        ]);

        return back()->with('success', 'Comment Added Successfully');
    }

    public function storeLike(Post $post)
    {
        $like = $post->likes()->where('user_id', 1)->first();

        if($like)
        {
            $like->delete();
            return back()->with('success', 'Your Dislike Post This Post');
        }

        $post->likes()->create([
            'user_id' => 1
        ]);

        return back()->with('success', 'You Liked This Post');
    }
}
