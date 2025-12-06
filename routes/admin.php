<?php

use App\Livewire\Admin\Inicio\InicioLivewire;

use App\Livewire\Admin\Cliente\{
    ClienteTodoLivewire,
    ClienteCrearLivewire,
    ClienteEditarLivewire
};

use App\Livewire\Admin\UnidadNegocio\{
    UnidadNegocioTodoLivewire,
    UnidadNegocioCrearLivewire,
    UnidadNegocioEditarLivewire
};

use App\Livewire\Admin\Sede\{
    SedeTodoLivewire,
    SedeCrearLivewire,
    SedeEditarLivewire
};

use App\Livewire\Admin\Proyecto\{
    ProyectoTodoLivewire,
    ProyectoCrearLivewire,
    ProyectoEditarLivewire
};

use App\Livewire\Admin\Lote\{
    LoteTodoLivewire,
    LoteCrearLivewire,
    LoteEditarLivewire
};

use App\Livewire\Admin\SeparacionLote\{
    SeparacionLoteTodoLivewire,
    SeparacionLoteCrearLivewire,
    SeparacionLoteEditarLivewire
};

use Illuminate\Support\Facades\Route;

Route::get('/perfil', InicioLivewire::class)->name('home');

Route::prefix('cliente')->name('cliente.vista.')->group(function () {
    Route::get('/', ClienteTodoLivewire::class)->name('todo');
    Route::get('/crear', ClienteCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', ClienteEditarLivewire::class)->name('editar');
});

Route::prefix('unidad-negocio')->name('unidad-negocio.vista.')->group(function () {
    Route::get('/', UnidadNegocioTodoLivewire::class)->name('todo');
    Route::get('/crear', UnidadNegocioCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', UnidadNegocioEditarLivewire::class)->name('editar');
});

Route::prefix('sede')->name('sede.vista.')->group(function () {
    Route::get('/', SedeTodoLivewire::class)->name('todo');
    Route::get('/crear', SedeCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', SedeEditarLivewire::class)->name('editar');
});

Route::prefix('proyecto')->name('proyecto.vista.')->group(function () {
    Route::get('/', ProyectoTodoLivewire::class)->name('todo');
    Route::get('/crear', ProyectoCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', ProyectoEditarLivewire::class)->name('editar');
});

Route::prefix('lote')->name('lote.vista.')->group(function () {
    Route::get('/', LoteTodoLivewire::class)->name('todo');
    Route::get('/crear', LoteCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', LoteEditarLivewire::class)->name('editar');
});

Route::prefix('separacion-lote')->name('separacion-lote.vista.')->group(function () {
    Route::get('/', SeparacionLoteTodoLivewire::class)->name('todo');
    Route::get('/crear', SeparacionLoteCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', SeparacionLoteEditarLivewire::class)->name('editar');
});

require __DIR__ . '/spatie.php';
require __DIR__ . '/marketing.php';
require __DIR__ . '/atc.php';
