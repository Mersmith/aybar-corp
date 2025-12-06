<?php

use App\Livewire\Admin\Imagen\ImagenTodoLivewire;
use App\Livewire\Admin\Archivo\ArchivoTodoLivewire;
use App\Http\Controllers\ImagenController;

use App\Livewire\Admin\Blog\BlogCrearLivewire;
use App\Livewire\Admin\Blog\BlogEditarLivewire;
use App\Livewire\Admin\Blog\BlogTodoLivewire;

use App\Livewire\Admin\Comunicado\ComunicadoCrearLivewire;
use App\Livewire\Admin\Comunicado\ComunicadoEditarLivewire;

use App\Livewire\Admin\Comunicado\ComunicadoTodoLivewire;
use App\Livewire\Admin\FormularioLanding\FormularioLandingEditarLivewire;

use App\Livewire\Admin\FormularioLanding\FormularioLandingTodoLivewire;
use App\Livewire\Admin\FormularioLibroReclamacion\FormularioLibroReclamacionEditarLivewire;

use App\Livewire\Admin\FormularioLibroReclamacion\FormularioLibroReclamacionTodoLivewire;
use App\Livewire\Admin\FormularioPaginaContacto\FormularioPaginaContactoEditarLivewire;
use App\Livewire\Admin\FormularioPaginaContacto\FormularioPaginaContactoTodoLivewire;

use App\Livewire\Admin\Menu\MenuCrearLivewire;
use App\Livewire\Admin\Menu\MenuEditarLivewire;
use App\Livewire\Admin\Menu\MenuTodoLivewire;

use App\Livewire\Admin\Pagina\PaginaCrearLivewire;
use App\Livewire\Admin\Pagina\PaginaEditarLivewire;
use App\Livewire\Admin\Pagina\PaginaTodoLivewire;

use App\Livewire\Admin\Seccion\SeccionBloqueCincoCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueCincoEditarLivewire;

use App\Livewire\Admin\Seccion\SeccionBloqueCincoTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueCuatroCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueCuatroEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueCuatroTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueDosCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueDosEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueDosTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueNueveCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueNueveEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueNueveTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueOchoCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueOchoEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueOchoTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueSeisCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueSeisEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueSeisTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueSieteCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueSieteEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueSieteTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueTresCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueTresEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueTresTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueUnoCrearLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueUnoEditarLivewire;
use App\Livewire\Admin\Seccion\SeccionBloqueUnoTodoLivewire;
use App\Livewire\Admin\Seccion\SeccionTodoLivewire;
use App\Livewire\Admin\TipoFormulario\TipoFormularioCrearLivewire;
use App\Livewire\Admin\TipoFormulario\TipoFormularioEditarLivewire;
use App\Livewire\Admin\TipoFormulario\TipoFormularioTodoLivewire;
use Illuminate\Support\Facades\Route;

Route::prefix('tipo-formulario')->name('tipo-formulario.vista.')->group(function () {
    Route::get('/', TipoFormularioTodoLivewire::class)->name('todo');
    Route::get('/crear', TipoFormularioCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', TipoFormularioEditarLivewire::class)->name('editar');
});

Route::prefix('formulario-pagina-contacto')->name('formulario-pagina-contacto.vista.')->group(function () {
    Route::get('/', FormularioPaginaContactoTodoLivewire::class)->name('todo');
    Route::get('/editar/{id}', FormularioPaginaContactoEditarLivewire::class)->name('editar');
});

Route::prefix('formulario-landing')->name('formulario-landing.vista.')->group(function () {
    Route::get('/', FormularioLandingTodoLivewire::class)->name('todo');
    Route::get('/editar/{id}', FormularioLandingEditarLivewire::class)->name('editar');
});

Route::prefix('formulario-libro-reclamacion')->name('formulario-libro-reclamacion.vista.')->group(function () {
    Route::get('/', FormularioLibroReclamacionTodoLivewire::class)->name('todo');
    Route::get('/editar/{id}', FormularioLibroReclamacionEditarLivewire::class)->name('editar');
});

Route::get('/imagen', ImagenTodoLivewire::class)->name('imagen.vista.todo');
Route::post('/upload-local-imagen', [ImagenController::class, 'uploadLocalImagen'])->name('imagen.upload-local');

Route::get('/archivo', ArchivoTodoLivewire::class)->name('archivo.vista.todo');

Route::prefix('pagina')->name('pagina.vista.')->group(function () {
    Route::get('/', PaginaTodoLivewire::class)->name('todo');
    Route::get('/crear', PaginaCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', PaginaEditarLivewire::class)->name('editar');
});

Route::prefix('menu')->name('menu.vista.')->group(function () {
    Route::get('/', MenuTodoLivewire::class)->name('todo');
    Route::get('/crear', MenuCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', MenuEditarLivewire::class)->name('editar');
});

Route::prefix('blog')->name('blog.vista.')->group(function () {
    Route::get('/', BlogTodoLivewire::class)->name('todo');
    Route::get('/crear', BlogCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', BlogEditarLivewire::class)->name('editar');
});

Route::prefix('comunicado')->name('comunicado.vista.')->group(function () {
    Route::get('/', ComunicadoTodoLivewire::class)->name('todo');
    Route::get('/crear', ComunicadoCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', ComunicadoEditarLivewire::class)->name('editar');
});

Route::prefix('seccion')->name('seccion.')->group(function () {
    Route::get('/', SeccionTodoLivewire::class)->name('vista.todo'); //ok
    Route::get('/bloque-uno', SeccionBloqueUnoTodoLivewire::class)->name('bloque-uno.vista.todo'); //ok
    Route::get('/bloque-uno/crear', SeccionBloqueUnoCrearLivewire::class)->name('bloque-uno.vista.crear'); //ok
    Route::get('/bloque-uno/editar/{id}', SeccionBloqueUnoEditarLivewire::class)->name('bloque-uno.vista.editar'); //ok
    Route::get('/bloque-dos', SeccionBloqueDosTodoLivewire::class)->name('bloque-dos.vista.todo'); //ok
    Route::get('/bloque-dos/crear', SeccionBloqueDosCrearLivewire::class)->name('bloque-dos.vista.crear'); //ok
    Route::get('/bloque-dos/editar/{id}', SeccionBloqueDosEditarLivewire::class)->name('bloque-dos.vista.editar'); //ok
    Route::get('/bloque-tres', SeccionBloqueTresTodoLivewire::class)->name('bloque-tres.vista.todo');
    Route::get('/bloque-tres/crear', SeccionBloqueTresCrearLivewire::class)->name('bloque-tres.vista.crear');
    Route::get('/bloque-tres/editar/{id}', SeccionBloqueTresEditarLivewire::class)->name('bloque-tres.vista.editar');
    Route::get('/bloque-cuatro', SeccionBloqueCuatroTodoLivewire::class)->name('bloque-cuatro.vista.todo'); //ok
    Route::get('/bloque-cuatro/crear', SeccionBloqueCuatroCrearLivewire::class)->name('bloque-cuatro.vista.crear'); //ok
    Route::get('/bloque-cuatro/editar/{id}', SeccionBloqueCuatroEditarLivewire::class)->name('bloque-cuatro.vista.editar'); //ok
    Route::get('/bloque-cinco', SeccionBloqueCincoTodoLivewire::class)->name('bloque-cinco.vista.todo'); //ok
    Route::get('/bloque-cinco/crear', SeccionBloqueCincoCrearLivewire::class)->name('bloque-cinco.vista.crear'); //ok
    Route::get('/bloque-cinco/editar/{id}', SeccionBloqueCincoEditarLivewire::class)->name('bloque-cinco.vista.editar'); //ok
    Route::get('/bloque-seis', SeccionBloqueSeisTodoLivewire::class)->name('bloque-seis.vista.todo'); //ok
    Route::get('/bloque-seis/crear', SeccionBloqueSeisCrearLivewire::class)->name('bloque-seis.vista.crear'); //ok
    Route::get('/bloque-seis/editar/{id}', SeccionBloqueSeisEditarLivewire::class)->name('bloque-seis.vista.editar'); //ok
    Route::get('/bloque-siete', SeccionBloqueSieteTodoLivewire::class)->name('bloque-siete.vista.todo'); //ok
    Route::get('/bloque-siete/crear', SeccionBloqueSieteCrearLivewire::class)->name('bloque-siete.vista.crear'); //ok
    Route::get('/bloque-siete/editar/{id}', SeccionBloqueSieteEditarLivewire::class)->name('bloque-siete.vista.editar'); //ok
    Route::get('/bloque-ocho', SeccionBloqueOchoTodoLivewire::class)->name('bloque-ocho.vista.todo'); //ok
    Route::get('/bloque-ocho/crear', SeccionBloqueOchoCrearLivewire::class)->name('bloque-ocho.vista.crear'); //ok
    Route::get('/bloque-ocho/editar/{id}', SeccionBloqueOchoEditarLivewire::class)->name('bloque-ocho.vista.editar'); //ok
    Route::get('/bloque-nueve', SeccionBloqueNueveTodoLivewire::class)->name('bloque-nueve.vista.todo');
    Route::get('/bloque-nueve/crear', SeccionBloqueNueveCrearLivewire::class)->name('bloque-nueve.vista.crear');
    Route::get('/bloque-nueve/editar/{id}', SeccionBloqueNueveEditarLivewire::class)->name('bloque-nueve.vista.editar');
});
