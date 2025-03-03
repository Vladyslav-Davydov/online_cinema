<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Главная страница (список фильмов)
Route::get('/', [MovieController::class, 'index'])->name('home');

// Ресурсные маршруты для работы с фильмами
Route::resource('movies', MovieController::class);