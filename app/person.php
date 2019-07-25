<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'country_id'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
