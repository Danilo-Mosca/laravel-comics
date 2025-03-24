<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    {{-- Istruzione che permette a Laravel di cercare le risorse per Bootstrap ed SCSS: --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
<h1>Laravel Comics</h1>
    @php
        dd(config('comics'));
    @endphp

</body>

</html>
