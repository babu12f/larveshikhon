<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function videos()
    {
        return $this->morphedByMany('App\Video', 'taggable');
    }

    public function posts()
    {
        return $this->morphedByMany('App\Post', 'taggable');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
