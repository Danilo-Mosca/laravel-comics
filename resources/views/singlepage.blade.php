{{-- per indicare che questa pagina utilizza il layout master dobbiamo usare la parola extends: --}}
@extends('layouts.master')

{{-- Sezione del titolo della pagina --}}
@section('title')
    Laravel Single Comic
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
        $jumbotron = 'resources/img/justiceleague.webp';
    @endphp
    {{-- Inserendo i tag <x-nome_componente>...</x-nome_componente> inserisco un componente, in questo caso inserisco il componente jumbotron (<x-jumbotron> </x-jumbotron>): --}}
    <x-jumbotron>
        {{-- e poi gli passo la variabile $jumbotron contenente l'url alla immagine (così da rendere dinamico il componente jumbotron ed il suo contenuto) attraverso i tag <x-slot:nome_dello_slot>...</x-slot:nome_dello_slot> che in questo caso sarà <x-slot:pathJumbotron></x-slot:pathJumbotron>: --}}
        <x-slot:pathJumbotron>{{ $jumbotron }}</x-slot:pathJumbotron>
        <x-slot:buttonLink>{{ route('home') }}</x-slot:buttonLink>
        <x-slot:buttonText>{{ 'Homepage' }}</x-slot:buttonText>
    </x-jumbotron>

    <div class="container mt-5 mb-3">
        <div class="row"> <!-- Spazio tra le card -->
            <div class="col-12"> <!-- 6 per riga su desktop, 3 su tablet, 1 su mobile -->

                {{-- Inserendo i tag <x-nome_componente>...</x-nome_componente> inserisco un componente, in questo caso inserisco il componente card (<x-card> </x-card>): --}}
                <x-singlecard>
                    <x-slot:image>{{ $cards[0]['thumb'] }}</x-slot:image>
                    <x-slot:title>{{ $cards[0]['title'] }}</x-slot:title>
                    <x-slot:series>{{ $cards[0]['series'] }}</x-slot:series>
                    <x-slot:price>{{ $cards[0]['price'] }}</x-slot:price>
                    <x-slot:description>{{ $cards[0]['description'] }}</x-slot:description>

                    @foreach ($cards[0] as $key => $value)
                        {{-- Filtro per gli artisti --}}
                        @if ($key == 'artists')
                            {{-- @dd($value) --}}
                            {{-- @dd(count($value)) --}}
                            @php
                                $appoArtists = '';
                            @endphp
                            @for ($i = 0; $i < count($value); $i++)
                                @php
                                    $appoArtists .= ' - ' . $value[$i];
                                @endphp
                                <x-slot:artists>{{ $appoArtists }}</x-slot:artists>
                            @endfor
                        @endif

                        {{-- Filtro per gli scrittori --}}
                        @if ($key == 'writers')
                            @php
                                $appoWriters = '';
                            @endphp
                            @for ($i = 0; $i < count($value); $i++)
                                @php
                                    $appoWriters .= ' - ' . $value[$i];
                                @endphp
                                <x-slot:writers>{{ $appoWriters }}</x-slot:writers>
                            @endfor
                        @endif
                    @endforeach
                </x-singlecard>
            </div>
        </div>
    </div>
@endsection
