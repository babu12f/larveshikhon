<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}
