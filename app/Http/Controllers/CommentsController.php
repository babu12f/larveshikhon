<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate(['body' => 'required|min:3|max:200']);

        $comment = $post->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        $subscribers = $comment->post->likes;
            
        foreach($subscribers as $subscriber)
        {
            $user = $subscriber->user;

            Mail::raw('New Commnet On a Post You Liked', function ($message) use ($user){
                $message->to($user->email, 'admin')->subject('New Comment Added');
            });
        }

        return back()->with('success', 'Comment Added Successfully');
    }

    public function storeLike(Post $post)
    {
        $like = $post->likes()->where('user_id', auth()->id())->first();

        if($like)
        {
            $like->delete();
            return back()->with('success', 'Your Dislike Post This Post');
        }

        $post->likes()->create([
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'You Liked This Post');
    }

    public function storeCommentLike(Comment $comment)
    {
        $like = $comment->likes()->where('user_id', auth()->id())->first();

        if($like)
        {
            $like->delete();
            return back()->with('success', 'Your Dislike The Comment');
        }

        $comment->likes()->create([
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'You Liked This Comment');
    }
}
