@extends('layouts.app')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h1>{{ $movie->title }}</h1>
        <div style="margin-bottom: 20px;">
            {!! $movie->vk_url !!} <!-- Вставляем код iframe -->
        </div>
        <div style="margin-bottom: 20px;">
            <h2>Описание</h2>
            <p>{{ $movie->description }}</p>
        </div>
        <a href="{{ route('movies.index') }}" style="display: inline-block; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
            Назад к списку фильмов
        </a>
    </div>
@endsection