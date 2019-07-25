<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Person;

class CountriesController extends Controller
{
    public function create()
    {
        return view('country.create');
    }

    public function saveToDatabase(Request $request)
    {
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

        // $name = request()->input('name');
        // $capital = request()->input('capital');
        // $currency = request()->input('currency');
        // $population = request()->input('population');

        // $name = $request->input('name');
        // $capital = $request->input('capital');
        // $currency = $request->input('currency');
        // $population = $request->input('population');

        // first apraoch
        // Country::create([
        //     'name' => $name,
        //     'capital' => $capital,
        //     'currency' => $currency,
        //     'population' => $population
        // ]);

        // 2nd approach
        // $country = new Country;

        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;

        // $country->save();

        // Country::create($request->all());
        Country::create( $request->only('name', 'capital', 'currency', 'population') );
        // Country::create($request->except('_toke'));

        // return back();
        return redirect('/countries');

    }

    public function showAllCountry()
    {
        $countries = Country::all();

        return view('country.showallcountry', compact('countries'));
    }

    public function showContryDetail($id)
    {
        $country = Country::find($id);

        return view('country.detail', compact('country'));
    }

    public function edit($id) //Route model binding
    {
        $country = Country::find($id);

        return view('country.edit', compact('country'));
    }

    public function update($id)
    {
        $country = Country::find($id);

        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;
        // $country->save();

        $country->update([
            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population
        ]);

        return back();
    }

    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        return back();
    }
}
