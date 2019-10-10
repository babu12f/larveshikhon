<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
    }

    public function thumbnail_path()
    {
        return asset("uploads/posts/$this->thumbnail");
    }

    public function likeByCurrentUser()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }
}
