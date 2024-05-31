<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="/">Home</a>
        <a href="/faq">FAQ</a>
        <a href="/who">Chi Siamo</a>
        <a href="/login">Login</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
