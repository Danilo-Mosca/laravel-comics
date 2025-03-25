{{-- per indicare che questa pagina utilizza il layout master dobbiamo usare la parola extends: --}}
@extends('layouts.master')

{{-- Sezione del titolo della pagina --}}
@section('title')
    Laravel Comics
@endsection

{{-- --------------------------------------------------------------------------------------------------------------- --}}
@php

// dd(config('comics'));   // prelevo le informazioni dal file di configurazione "comics.php.php"

// Salvo l'array letterale contenente i comics (dal file di configurazione "comics.php" nella directory: config/comics.php) in una variabile cards
$cards = config('comics');

@endphp
{{-- --------------------------------------------------------------------------------------------------------------- --}}

</body>

{{-- Sezione della pagina personalizzata chiamata "content" nel layout: --}}
@section('content')
<h1>Homepage Laravel Comics</h1>
<p>Sezione personalizzata di ogni pagina</p>
    
@endsection
</html>
