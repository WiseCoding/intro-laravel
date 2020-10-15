<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', 'App\Http\Controllers\HomeController@index');

// Reviews
Route::get('/reviews', 'App\Http\Controllers\ReviewsController@index');
Route::post('/reviews', 'App\Http\Controllers\ReviewsController@store');
