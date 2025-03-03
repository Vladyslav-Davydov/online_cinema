@extends('layouts.app')

@section('content')
    <h1>Добавить фильм</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Название фильма</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Описание</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="vk_url">Код iframe для встраивания</label>
            <textarea name="vk_url" id="vk_url" required></textarea>
        </div>
        <button type="submit">Добавить</button>
    </form>
@endsection