<?php


use App\Livewire\Admin\Inicio\InicioLivewire;

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', InicioLivewire::class)->name('home');
