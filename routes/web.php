<?php

use Illuminate\Support\Facades\Route;

Route::view('/tentang', 'tentang')->name('about');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/kontak', 'kontak')->name('contact');