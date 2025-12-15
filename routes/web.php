<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cinemas', [CinemaController::class, 'index']);
Route::get('/cinemas/{id}', [CinemaController::class, 'show']);
