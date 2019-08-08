<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('profiles.index', [
            'profiles' => Profile::all()
        ]);
    }
}
