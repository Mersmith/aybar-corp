<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('socio.inicio');
})->name('home');
