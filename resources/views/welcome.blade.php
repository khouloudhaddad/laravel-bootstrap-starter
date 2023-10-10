<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style type="text/css">
            .bt-icons i{
                font-size: 30px;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <main class="container">
                <div class="flex justify-center">
                    <h1>Install Bootstrap in Laravel</h1>
                </div>
                <div class="bt-icons">
                    <i class="bi bi-airplane-fill"></i>
                    <i class="bi bi-apple"></i>
                    <i class="bi bi-balloon-heart"></i>
                </div>
        </main>
    </body>
</html>
