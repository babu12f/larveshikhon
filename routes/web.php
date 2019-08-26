<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/sendmail/', 'UsersController@sendmail');

Route::post('/sendmail/', 'UsersController@sending');

Route::get('/users/', 'UsersController@index');
Route::get('/profiles/', 'ProfilesController@index');

Route::get('/users/create', 'UsersController@create');

Route::post('/users/create', 'UsersController@store');

Route::get('/users/{id}/show', 'UsersController@show');

Route::get('/users/{id}/edit', 'UsersController@edit');

Route::patch('/users/{id}/edit', 'UsersController@update');
