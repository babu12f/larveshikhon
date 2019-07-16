<?php

Route::get('/', 'HomeController@index')->name('blog.index');
Route::get('/single', 'HomeController@show')->name('blog.single');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');