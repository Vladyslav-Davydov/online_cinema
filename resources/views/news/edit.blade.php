@extends('layouts.app')

@section('content')
    <h1>Редактировать новость</h1>
    
    <form action="{{ route('news.update', $news) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Название</label>
        <input type="text" name="title" id="title" value="{{ $news->title }}" required>
        <br>

        <label for="preview">Краткое описание</label>
        <textarea name="preview" id="preview" required>{{ $news->preview }}</textarea>
        <br>

        <label for="content">Контент</label>
        <textarea name="content" id="content" required>{{ $news->content }}</textarea>
        <br>

        <label for="published_at">Дата публикации</label>
        <input type="datetime-local" name="published_at" id="published_at" value="{{ $news->published_at }}">
        <br>

        <button type="submit">Обновить</button>
    </form>

    <hr>

    {{-- Кнопка удаления --}}
    <form action="{{ route('news.destroy', $news) }}" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить эту новость?');">
        @csrf
        @method('DELETE')
        <button type="submit" style="color: white; background-color: red; padding: 5px 10px; border: none; cursor: pointer;">
            Удалить новость
        </button>
    </form>

    <br>
    <a href="{{ route('home') }}" class="btn btn-secondary">Вернуться на главную</a>
@endsection
