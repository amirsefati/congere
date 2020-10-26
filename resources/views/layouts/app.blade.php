<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>کنگره سیاست‌گذاری انرژی</title>
    <meta name="keywords" content="سیاستگذاری انرژی , کـنـگـره سیاستگذاری انرژی, دانشگاه صنعتی امیرکبیر,نخـستین کـنـگـره سیاستگذاری انرژی">
    <meta name="description" content="موتور محرک تولید و اجرای سیاستگذاری انرژی">
    <meta name="author" content="sefati100@gmail.com">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body style="background: #F4F5F5;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                

                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
