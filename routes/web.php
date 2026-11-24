<?php

use Illuminate\Support\Facades\Route;

Route::view('/tentang', 'tentang')->name('about');

Route::view('/keahlian', 'keahlian')->name('keahlian');

Route::get('/', function () {
    return view('home');
})->name('home');
