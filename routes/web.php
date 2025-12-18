<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPageController;

Route::get('/', [IndexPageController::class, 'index'])->name('home');
