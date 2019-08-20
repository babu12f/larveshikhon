<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::paginate(1)
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'firstname' => ['required', 'min:3', 'max:20'],
            'lastname' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'user_name' => 'required|alpha_num',
            'password' => 'required|confirmed'
        ];

        $messages = [
            'firstname.required' => 'Your have to provide Firstname :(',
            'firstname.min' => 'You have to provide minimub 3 character !!'
        ];

        // request()->validate($rules, $messages);
        // $request->validate($rules, $messages);

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' => request('date_of_birth'),
            'user_name' => request('user_name'),
        ]);

        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }
}
