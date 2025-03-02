<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cinema\FilmController;
use App\Http\Controllers\Blog\NewsController;

// Главная страница
Route::get('/', [FilmController::class, 'index']);

// Маршрут для фильмов (если хочешь отдельную страницу)
Route::get('/films', [FilmController::class, 'index']);
Route::resource('news', NewsController::class);
Route::group(['namespace' => '\App\Http\Controllers\Blog', 'prefix' => 'blog'], function() {
    Route::resource('news', 'NewsController')->names('blog.news');
});
