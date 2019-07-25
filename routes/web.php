<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/countries', 'CountriesController@showAllCountry');
Route::get('/countries/create', 'CountriesController@create');
Route::get('/countries/{id}', 'CountriesController@showContryDetail');
Route::post('/countries/create', 'CountriesController@saveToDatabase');
Route::get('/countries/{id}/edit', 'CountriesController@edit');
Route::patch('/countries/{id}/edit', 'CountriesController@update');
Route::delete('/countries/{id}/delete', 'CountriesController@destroy');

// Person
Route::get('/persons', 'PersonsController@index');
Route::get('/persons/create', 'PersonsController@create');
Route::post('/persons/create', 'PersonsController@store');
