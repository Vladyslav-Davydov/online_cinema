<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
