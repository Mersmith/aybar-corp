<?php

use App\Http\Controllers\Cliente\InicioController;
use App\Http\Controllers\Cliente\DireccionController;
use App\Http\Controllers\Cliente\LoteController;
use App\Http\Controllers\Cliente\CronogramaController;


use Illuminate\Support\Facades\Route;


Route::get('/home', [InicioController::class, 'index'])->name('home');

Route::get('/direccion', [DireccionController::class, 'index'])->name('direccion');

Route::get('/lote', [LoteController::class, 'index'])->name('lote');

Route::get('/lote/{id}/cronograma', [CronogramaController::class, 'index'])->name('lote.cronograma.ver');
