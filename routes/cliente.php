<?php

use App\Http\Controllers\Cliente\InicioController;
use App\Http\Controllers\Cliente\DireccionController;


use Illuminate\Support\Facades\Route;


Route::get('/home', [InicioController::class, 'index'])->name('home');

Route::get('/direccion', [DireccionController::class, 'index'])->name('direccion');