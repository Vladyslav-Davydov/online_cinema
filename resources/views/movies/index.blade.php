@extends('layouts.app')

@section('content')
    <h1>Список фильмов</h1>
    <a href="{{ route('movies.create') }}" style="display: inline-block; margin-bottom: 20px; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
        Добавить новый фильм
    </a>
    @if($movies->isEmpty())
        <p>Фильмов пока нет.</p>
    @else
        <ul style="list-style-type: none; padding: 0;">
            @foreach($movies as $movie)
                <li style="padding: 10px; border-bottom: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center;">
                    <a href="{{ route('movies.show', $movie) }}" style="text-decoration: none; color: #007bff; font-size: 18px;">
                        {{ $movie->title }}
                    </a>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="margin: 0;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">
                            Удалить
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection