@extends('layouts.app')

@section('content')
    <h1>Добро пожаловать в онлайн-кинотеатр</h1>
    <h2>Список фильмов</h2>
    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a>
            </li>
        @endforeach
    </ul>

    <br>

    {{-- Кнопка для перехода в режим редактирования --}}
    <a href="{{ route('movies.create') }}" class="btn btn-primary">Режим редактирования</a>

@endsection
