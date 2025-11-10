<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\FormularioPaginaContactoController;
use App\Http\Controllers\FormularioLibroReclamacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('home'); //pagina personalizada //ok

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index'); //pagina personalizada //ok

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index'); //pagina personalizada
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); //pagina personalizada

Route::get('/contacto', [FormularioPaginaContactoController::class, 'index'])->name('contacto.index'); //pagina personalizada
Route::post('/contacto/enviar', [FormularioPaginaContactoController::class, 'enviar'])->name('contacto.enviar');

Route::get('/libro-de-reclamaciones', [FormularioLibroReclamacionController::class, 'index'])->name('reclamaciones.index'); //pagina personalizada
Route::post('/libro-de-reclamaciones/enviar', [FormularioLibroReclamacionController::class, 'enviar'])->name('reclamaciones.enviar');

Route::get('/{slug?}', [PaginaController::class, 'show'])->name('pagina.mostrar');
