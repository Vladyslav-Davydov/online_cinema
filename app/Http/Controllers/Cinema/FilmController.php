<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema\Film;  // Подключаем модель Film

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();  // Получаем все фильмы из базы данных

        return view('films.index', compact('films'));  // Отправляем данные в представление
    }
}
