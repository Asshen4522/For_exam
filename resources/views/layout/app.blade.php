<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="icon" href="{{ asset('img/logo/logo_main.png') }}">
    </head>
    <body>
        @include('layout.header')
        <div class="page">
            @yield('body')
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>