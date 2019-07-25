<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'capital', 'currency', 'population'];

    public function persons()
    {
        return $this->hasMany('App\Person');
    }
}
