<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
</head>
<body>
    <h1>Список новостей</h1>
    <ul>
        @extends('layouts.app')

        @section('title', 'Список новостей')

        @section('content')
            <div class="container">
                <h1>Список новостей</h1>
                <ul class="list-group">
                    @foreach($news as $item)
                        <li class="list-group-item">
                            <a href="{{ route('blog.news.show', $item->id) }}">{{ $item->title }}</a>
                            <p>{{ $item->excerpt }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endsection

        @foreach($items as $item)
            <li>
                <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

