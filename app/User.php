<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    protected $dates = ['date_of_birth'];

    public function profile()
    {
        return $this->hasOne('App\Profile', 'owner_id');
    }
}
