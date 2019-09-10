<?php

Route::get('/', function(){
    return view('welcome');
});
Auth::routes(['verify' => true]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile');

Route::resource('videos', 'VideosController');


