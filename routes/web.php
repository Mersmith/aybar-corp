<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, 'index'])->name('home'); //pagina personalizada
