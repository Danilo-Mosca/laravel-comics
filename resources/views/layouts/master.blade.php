<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Istruzione che permette a Laravel di cercare le risorse per Bootstrap ed SCSS: --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    @include('partials.header')


    {{-- contenuto della pagina --}}
    @yield('content')


    @include('partials.footer')

</body>
</html>