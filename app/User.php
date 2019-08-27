<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
