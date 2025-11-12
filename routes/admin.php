<?php


use App\Livewire\Admin\Inicio\InicioLivewire;
use App\Livewire\Admin\Imagen\ImagenTodoLivewire;
use App\Http\Controllers\ImagenController;

use App\Livewire\Admin\Pagina\{
    PaginaTodoLivewire,
    PaginaCrearLivewire,
    PaginaEditarLivewire
};

use App\Livewire\Admin\Menu\{
    MenuTodoLivewire,
    MenuCrearLivewire,
    MenuEditarLivewire
};

use App\Livewire\Admin\Seccion\{
    SeccionTodoLivewire,
    SeccionBloqueUnoTodoLivewire,
    SeccionBloqueUnoCrearLivewire,
    SeccionBloqueUnoEditarLivewire,
    SeccionBloqueDosTodoLivewire,
    SeccionBloqueDosCrearLivewire,
    SeccionBloqueDosEditarLivewire,
    SeccionBloqueTresTodoLivewire,
    SeccionBloqueTresCrearLivewire,
    SeccionBloqueTresEditarLivewire,
    SeccionBloqueCuatroTodoLivewire,
    SeccionBloqueCuatroCrearLivewire,
    SeccionBloqueCuatroEditarLivewire,
    SeccionBloqueCincoTodoLivewire,
    SeccionBloqueCincoCrearLivewire,
    SeccionBloqueCincoEditarLivewire,
    SeccionBloqueSeisTodoLivewire,
    SeccionBloqueSeisCrearLivewire,
    SeccionBloqueSeisEditarLivewire,
    SeccionBloqueSieteTodoLivewire,
    SeccionBloqueSieteCrearLivewire,
    SeccionBloqueSieteEditarLivewire,
    SeccionBloqueOchoTodoLivewire,
    SeccionBloqueOchoCrearLivewire,
    SeccionBloqueOchoEditarLivewire,
    SeccionBloqueNueveTodoLivewire,
    SeccionBloqueNueveCrearLivewire,
    SeccionBloqueNueveEditarLivewire,
};

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', InicioLivewire::class)->name('home');

Route::get('/imagen', ImagenTodoLivewire::class)->name('imagen.vista.todo');
Route::post('/upload-local-imagen', [ImagenController::class, 'uploadLocalImagen'])->name('imagen.upload-local');

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

Route::prefix('seccion')->name('seccion.')->group(function () {
    Route::get('/', SeccionTodoLivewire::class)->name('vista.todo');
    Route::get('/bloque-uno', SeccionBloqueUnoTodoLivewire::class)->name('bloque-uno.vista.todo');
    Route::get('/bloque-uno/crear', SeccionBloqueUnoCrearLivewire::class)->name('bloque-uno.vista.crear');
    Route::get('/bloque-uno/editar/{id}', SeccionBloqueUnoEditarLivewire::class)->name('bloque-uno.vista.editar');
    Route::get('/bloque-dos', SeccionBloqueDosTodoLivewire::class)->name('bloque-dos.vista.todo');
    Route::get('/bloque-dos/crear', SeccionBloqueDosCrearLivewire::class)->name('bloque-dos.vista.crear');
    Route::get('/bloque-dos/editar/{id}', SeccionBloqueDosEditarLivewire::class)->name('bloque-dos.vista.editar');
    Route::get('/bloque-tres', SeccionBloqueTresTodoLivewire::class)->name('bloque-tres.vista.todo');
    Route::get('/bloque-tres/crear', SeccionBloqueTresCrearLivewire::class)->name('bloque-tres.vista.crear');
    Route::get('/bloque-tres/editar/{id}', SeccionBloqueTresEditarLivewire::class)->name('bloque-tres.vista.editar');
    Route::get('/bloque-cuatro', SeccionBloqueCuatroTodoLivewire::class)->name('bloque-cuatro.vista.todo');
    Route::get('/bloque-cuatro/crear', SeccionBloqueCuatroCrearLivewire::class)->name('bloque-cuatro.vista.crear');
    Route::get('/bloque-cuatro/editar/{id}', SeccionBloqueCuatroEditarLivewire::class)->name('bloque-cuatro.vista.editar');
    Route::get('/bloque-cinco', SeccionBloqueCincoTodoLivewire::class)->name('bloque-cinco.vista.todo');
    Route::get('/bloque-cinco/crear', SeccionBloqueCincoCrearLivewire::class)->name('bloque-cinco.vista.crear');
    Route::get('/bloque-cinco/editar/{id}', SeccionBloqueCincoEditarLivewire::class)->name('bloque-cinco.vista.editar');
    Route::get('/bloque-seis', SeccionBloqueSeisTodoLivewire::class)->name('bloque-seis.vista.todo');
    Route::get('/bloque-seis/crear', SeccionBloqueSeisCrearLivewire::class)->name('bloque-seis.vista.crear');
    Route::get('/bloque-seis/editar/{id}', SeccionBloqueSeisEditarLivewire::class)->name('bloque-seis.vista.editar');
    Route::get('/bloque-siete', SeccionBloqueSieteTodoLivewire::class)->name('bloque-siete.vista.todo');
    Route::get('/bloque-siete/crear', SeccionBloqueSieteCrearLivewire::class)->name('bloque-siete.vista.crear');
    Route::get('/bloque-siete/editar/{id}', SeccionBloqueSieteEditarLivewire::class)->name('bloque-siete.vista.editar');
    Route::get('/bloque-ocho', SeccionBloqueOchoTodoLivewire::class)->name('bloque-ocho.vista.todo');
    Route::get('/bloque-ocho/crear', SeccionBloqueOchoCrearLivewire::class)->name('bloque-ocho.vista.crear');
    Route::get('/bloque-ocho/editar/{id}', SeccionBloqueOchoEditarLivewire::class)->name('bloque-ocho.vista.editar');
    Route::get('/bloque-nueve', SeccionBloqueNueveTodoLivewire::class)->name('bloque-nueve.vista.todo');
    Route::get('/bloque-nueve/crear', SeccionBloqueNueveCrearLivewire::class)->name('bloque-nueve.vista.crear');
    Route::get('/bloque-nueve/editar/{id}', SeccionBloqueNueveEditarLivewire::class)->name('bloque-nueve.vista.editar');
});
