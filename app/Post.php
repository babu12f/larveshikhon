<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
