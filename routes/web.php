<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
Route::get('/', function () {
    return view('layout');
});

Route::resource('movies', MovieController::class);
Route::resource('genres', GenreController::class);