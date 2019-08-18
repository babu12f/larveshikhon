<?php

Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/create', 'AuthorsController@create');
Route::post('/authors/create', 'AuthorsController@store');

Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::post('/books/create', 'BooksController@store');
Route::get('/books/{id}/edit', 'BooksController@edit');
Route::patch('/books/{id}/edit', 'BooksController@update');