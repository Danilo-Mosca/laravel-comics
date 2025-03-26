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




{{-- Sezione della pagina personalizzata chiamata "content" nel layout: --}}
@section('content')
    @php
        $jumbotron = 'resources/img/jumbotron.jpg';
    @endphp
    {{-- Inserendo i tag <x-nome_componente>...</x-nome_componente> inserisco un componente, in questo caso inserisco il componente jumbotron (<x-jumbotron> </x-jumbotron>): --}}
    <x-jumbotron>
        {{-- e poi gli passo la variabile $jumbotron contenente l'url alla immagine (così da rendere dinamico il componente jumbotron ed il suo contenuto) attraverso i tag <x-slot:nome_dello_slot>...</x-slot:nome_dello_slot> che in questo caso sarà <x-slot:pathJumbotron></x-slot:pathJumbotron>: --}}
        <x-slot:pathJumbotron>{{ $jumbotron }}</x-slot:pathJumbotron>
    </x-jumbotron>

    <div class="container mt-4">
        <div class="row g-3"> <!-- Spazio tra le card -->
            @foreach ($cards as $card)
                <div class="col-lg-2 col-md-4 col-12"> <!-- 6 per riga su desktop, 3 su tablet, 1 su mobile -->

                    {{-- Inserendo i tag <x-nome_componente>...</x-nome_componente> inserisco un componente, in questo caso inserisco il componente card (<x-card> </x-card>): --}}
                    <x-card>
                        <x-slot:image>{{ $card['thumb'] }}</x-slot:image>
                        <x-slot:title>{{ $card['series'] }}</x-slot:title>
                    </x-card>

                </div>
            @endforeach
        </div>
    </div>
@endsection
