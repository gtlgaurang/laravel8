<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>
    <div id="app">
        
        <h5>Laravel App</h5>
        <nav>
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('home.contact') }}">Contact</a>
            <a href="{{ route('posts.index') }}">Blog Posts</a>
            <a href="{{ route('posts.create') }}">Add Blog Posts</a>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
