<?php

use Illuminate\Support\Facades\Route;

// rutas generales
Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');
