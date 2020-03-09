<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="30">

        <title>Laravel</title>
        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" href="app.css">
    </head>
    <body>
        <section>
        @yield('main')
    </section>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.11.0/dist/alpine.js" defer></script>
    <script src="app.js"></script>
    </body>
</html>
