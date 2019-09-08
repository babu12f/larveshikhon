<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/fileup', 'FileUploaController@create');

Route::post('/fileup', 'FileUploaController@store');

Route::get('/users/create', 'UsersController@create');

Route::post('/users/create', 'UsersController@store');

Route::get('/images', 'UsersController@images');

Route::resource('videos', 'VideosController');

Route::resource('posts', 'PostsController');

Route::resource('tags', 'TagsController');

Route::post('/videos/{id}/comments', 'CommentsController@videoComment');
Route::post('/posts/{id}/comments', 'CommentsController@postComment');

Route::get('/comments', 'CommentsController@index');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');

