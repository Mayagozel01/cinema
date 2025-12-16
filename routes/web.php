<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;


Route::get('/', [CinemaController::class, 'index']);
Route::get('/cinemas/{id}', [CinemaController::class, 'show']);
