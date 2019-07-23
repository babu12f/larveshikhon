<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/countries', 'CountriesController@showAllCountry');
Route::get('/countries/{id}', 'CountriesController@showContryDetail');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/create', 'CountriesController@saveToDatabase');
Route::get('/countries/{country}/edit', 'CountriesController@edit');