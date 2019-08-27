<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/fileup', 'FileUploaController@create');

Route::post('/fileup', 'FileUploaController@store');

Route::get('/users/create', 'UsersController@create');

Route::post('/users/create', 'UsersController@store');

Route::get('/images', 'UsersController@images');

