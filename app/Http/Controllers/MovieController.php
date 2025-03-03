<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    // Отображаем форму для создания фильма
    public function create()
    {
        return view('movies.create_movie'); // Убедись, что файл называется create_movie.blade.php
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255', // Название фильма
            'description' => 'required|string',   // Описание фильма
            'vk_url' => 'required|string',        // Код iframe для встраивания
        ]);
    
        Movie::create($data); // Создаем фильм
    
        return redirect()->route('movies.index')->with('success', 'Фильм добавлен!');
    }

    // Показываем фильм
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    // Удаляем фильм
    public function destroy(Movie $movie)
    {
        $movie->delete(); // Удаляем фильм

        return redirect()->route('movies.index')->with('success', 'Фильм удален!');
    }
}