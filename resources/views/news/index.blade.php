@extends('layouts.app')
@section('title', 'News')
@section('content')
    <h1>Новости</h1>
    <a href="{{ route('news.create') }}">Создать новость</a>
    <ul>
        @foreach($news as $new)
            <li>
                <a href="{{ route('news.edit', $new) }}">{{ $new->title }}</a> | 
                <form action="{{ route('news.destroy', $new) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
