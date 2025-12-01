<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\ConsultaCodigoClienteController;
use App\Http\Controllers\FormularioLandingController;
use App\Http\Controllers\FormularioLibroReclamacionController;
use App\Http\Controllers\FormularioPaginaContactoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PaginaController;
use App\Livewire\Web\Sesion\RegistrarClienteCrearLivewire;
use App\Livewire\Web\Sesion\RegistrarSocioCrearLivewire;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\SlinController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('home'); //pagina personalizada //ok

Route::get('/test-slin/cliente', [SlinController::class, 'probarCliente']);
Route::get('/test-slin/lotes', [SlinController::class, 'probarLotes']);
Route::get('/test-slin/cuotas', [SlinController::class, 'probarCuotas']);

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

Route::get('/landing', [FormularioLandingController::class, 'index'])->name('landing.index'); //pagina personalizada
Route::post('/landing/enviar', [FormularioLandingController::class, 'store'])->name('landing.store');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index'); //pagina personalizada //ok

Route::get('/consulta-codigo-cliente', [ConsultaCodigoClienteController::class, 'index'])->name('consulta-codigo-cliente.index'); //pagina personalizada //ok

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index'); //pagina personalizada
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); //pagina personalizada

Route::get('/comunicado', [ComunicadoController::class, 'index'])->name('comunicado.index'); //pagina personalizada
Route::get('/comunicado/{slug}', [ComunicadoController::class, 'show'])->name('comunicado.show'); //pagina personalizada

Route::get('/contacto', [FormularioPaginaContactoController::class, 'index'])->name('contacto.index'); //pagina personalizada
Route::post('/contacto/enviar', [FormularioPaginaContactoController::class, 'enviar'])->name('contacto.enviar');

Route::get('/libro-de-reclamaciones', [FormularioLibroReclamacionController::class, 'index'])->name('reclamaciones.index'); //pagina personalizada
Route::post('/libro-de-reclamaciones/enviar', [FormularioLibroReclamacionController::class, 'enviar'])->name('reclamaciones.enviar');

Route::get('/{slug?}', [PaginaController::class, 'show'])->name('pagina.mostrar');
