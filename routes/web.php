<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/singlepage', function(){
    return view("singlepage");
})->name("single-page");