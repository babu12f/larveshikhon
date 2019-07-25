<?php

namespace App\Http\Controllers;

use App\Person;
use App\Country;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        return view('persons.index', compact('persons'));
    }
    public function create()
    {
        $countries = Country::all();

        return view('persons.create', compact('countries'));
    }

    public function store()
    {
        Person::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country_id' => request('country')
        ]);

        return back();
    }
}
