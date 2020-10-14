<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@show');

Route::get('/reviews', 'App\Http\Controllers\ReviewsController@show');
