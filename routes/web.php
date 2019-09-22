<?php

Route::get('/', function(){
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile');

Route::resource('videos', 'VideosController');

Route::get("admin", 'AdminController@index')->middleware('AdminMiddle');


