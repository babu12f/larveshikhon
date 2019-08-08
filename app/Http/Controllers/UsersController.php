<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Profile;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $user = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' => request('date_of_birth'),
            'user_name' => request('user_name'),
        ]);

        $user->profile()->create([
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address'),
        ]);

        // Profile::create([
        //     'profile_pic' => request('profile_pic'),
        //     'bio' => request('bio'),
        //     'address' => request('address'),
        //     'owner_id' => $user->id
        // ]);

        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }
}
