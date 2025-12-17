<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;

Route::get('/', [CinemaController::class, 'index'])->name('home');
Route::get('/movies', [CinemaController::class, 'movies'])->name('movies');
Route::get('/showtimes', [CinemaController::class, 'showtimes'])->name('showtimes');
Route::get('/contact', [CinemaController::class, 'contact'])->name('contact');
Route::get('/cinemas/{id}', [CinemaController::class, 'show']);