<?php


namespace App\Http\Controllers;
use App\Models\Movie; // Должен быть импорт модели Movie
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Получаем список фильмов
        return view('home', compact('movies')); // Передаем их в представление
    }
}
