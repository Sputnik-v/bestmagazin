<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BestMagazine</title>
    @vite('resources/css/app.css')
    <style>
        body::-webkit-scrollbar {
            width: 8px;               /* ширина всей полосы прокрутки */
        }

        body::-webkit-scrollbar-track {
            background: white;        /* цвет зоны отслеживания */
        }

        body::-webkit-scrollbar-thumb {
            background-color: #14B8A6;    /* цвет бегунка */
            border-radius: 30px;       /* округлось бегунка */
            border: 1px solid orange;  /* отступ вокруг бегунка */
        }
    </style>
</head>
<body class="bg-gray-700">
        @yield('header')
        <div class="max-w-screen-xl mx-auto border-l-2 border-gray-900 flex justify-between">
            @yield('nav')
            @yield('main')
            @yield('post-block')
        </div>
        @yield('footer')
</body>
</html>
