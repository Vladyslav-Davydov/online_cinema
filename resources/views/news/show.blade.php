<!-- resources/views/news/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <p>{{ $news->content }}</p>
    </div>
@endsection