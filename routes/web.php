<?php

use App\Http\Controllers\Web\InicioController;
use App\Http\Controllers\Web\NosotrosController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\GrupoProyectoController;
use App\Http\Controllers\Web\ProyectoController;
use App\Http\Controllers\Web\ContactoController;
use App\Http\Controllers\Web\PaginaController;
use App\Http\Controllers\Web\LibroReclamacionController;
use App\Http\Controllers\Web\ComunicadoController;
use App\Http\Controllers\Web\ConsultaCodigoClienteController;
use App\Http\Controllers\Web\FormularioLandingController;
use Illuminate\Support\Facades\Route;
require __DIR__ . '/auth.php';

Route::get('/', [InicioController::class, 'index'])->name('home'); //pagina personalizada //ok

Route::get('/landing', [FormularioLandingController::class, 'index'])->name('landing.index'); //pagina personalizada
Route::post('/landing/enviar', [FormularioLandingController::class, 'store'])->name('landing.store');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index'); //pagina personalizada //ok

Route::get('/consulta-codigo-cliente', [ConsultaCodigoClienteController::class, 'index'])->name('consulta-codigo-cliente.index'); //pagina personalizada //ok

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index'); //pagina personalizada
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); //pagina personalizada

Route::get('/grupo-proyecto', [GrupoProyectoController::class, 'index'])->name('grupo-proyecto.index'); //pagina personalizada
Route::get('/grupo-proyecto/{slug}', [GrupoProyectoController::class, 'show'])->name('grupo-proyecto.show'); //pagina personalizada

Route::get('/proyecto/{slug}', [ProyectoController::class, 'show'])->name('proyecto.show'); //pagina personalizada

Route::get('/comunicado', [ComunicadoController::class, 'index'])->name('comunicado.index'); //pagina personalizada
Route::get('/comunicado/{slug}', [ComunicadoController::class, 'show'])->name('comunicado.show'); //pagina personalizada

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index'); //pagina personalizada

Route::get('/libro-de-reclamaciones', [LibroReclamacionController::class, 'index'])->name('reclamaciones.index'); //pagina personalizada
Route::post('/libro-de-reclamaciones/enviar', [LibroReclamacionController::class, 'enviar'])->name('reclamaciones.enviar');

Route::get('/{slug?}', [PaginaController::class, 'show'])->name('pagina.mostrar');