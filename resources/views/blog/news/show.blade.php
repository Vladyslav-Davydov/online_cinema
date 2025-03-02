<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item->title }}</title>
</head>
<body>
    @extends('layouts.app')

    @section('title', $newsItem->title)

    @section('content')
        <div class="container">
            <h1>{{ $newsItem->title }}</h1>
            <p>{{ $newsItem->content }}</p>
            <a href="{{ route('blog.news.index') }}" class="btn btn-primary">Вернуться к списку</a>
        </div>
    @endsection

    <h1>{{ $item->title }}</h1>
    <p>{{ $item->preview }}</p>
    <div>{{ $item->content }}</div>
</body>
</html>
