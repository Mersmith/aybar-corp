<?php

use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\VerificationController;
use App\Livewire\Web\Sesion\RegistrarClienteCrearLivewire;
use App\Livewire\Web\Sesion\RegistrarSocioCrearLivewire;
use Illuminate\Support\Facades\Route;

Route::get('/ingresar', [LoginController::class, 'indexIngresarCliente'])->name('ingresar.cliente');
Route::post('/ingresar', [LoginController::class, 'ingresarCliente'])->name('ingresar.cliente');
Route::post('/logout', [LoginController::class, 'logoutCliente'])->name('logout.cliente');
Route::get('/registrar', RegistrarClienteCrearLivewire::class)->name('registrar.cliente');

Route::get('/ingresar/socio', [LoginController::class, 'indexIngresarSocio'])->name('ingresar.socio');
Route::post('/ingresar/socio', [LoginController::class, 'ingresarSocio'])->name('ingresar.socio');
Route::post('/logout/socio', [LoginController::class, 'logoutSocio'])->name('logout.socio');
Route::get('/registrar/socio', RegistrarSocioCrearLivewire::class)->name('registrar.socio');

Route::get('/ingresar/admin', [LoginController::class, 'indexIngresarAdmin'])->name('ingresar.admin');
Route::post('/ingresar/admin', [LoginController::class, 'ingresarAdmin'])->name('ingresar.admin');
Route::post('/logout/admin', [LoginController::class, 'logoutAdmin'])->name('logout.admin');

Route::post('/email/verification-notification', [VerificationController::class, 'send'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');
