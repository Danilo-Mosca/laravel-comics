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
    <div class="container mt-4">
        <div class="row g-3"> <!-- Spazio tra le card -->
            @foreach ($cards as $card)
                <div class="col-lg-2 col-md-4 col-12"> <!-- 6 per riga su desktop, 3 su tablet, 1 su mobile -->
                    <div class="card">
                        <img src="{{ $card['thumb'] }}" class="card-img-top" alt="{{ $card['series'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ strtoupper($card['series']) }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

</html>
