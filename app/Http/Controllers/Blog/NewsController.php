<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\News; // Подключаем модель News
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all(); // Получаем все новости
        return view('news.index', compact('news')); // Передаем данные в шаблон
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $newsItem = News::findOrFail($id); // Ищем новость по id или показываем ошибку
        return view('news.detail', compact('newsItem')); // Передаем данные в шаблон
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Можно добавить логику для отображения формы создания новости
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Можно добавить логику для сохранения новости в базе
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Можно добавить логику для редактирования новости
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Можно добавить логику для обновления новости
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Можно добавить логику для удаления новости
    }
}
