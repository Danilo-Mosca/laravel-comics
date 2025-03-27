<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Salvo l'array letterale contenente i comics (dal file di configurazione "comics.php" nella directory: config/comics.php) in una variabile cards
    $cards = config('comics');
    // e poi la passo come parametro con il metodo compact() alla rotta '/' home:
    return view('home', compact('cards'));
    // Avrei potuto passarglieli anche così tra parentesi quadre e come array letterale:
    // return view('home', ['cards' => config('comics')]);
})->name("home");

Route::get('/singlepage', function () {
    return view("singlepage");
})->name("single-page");
