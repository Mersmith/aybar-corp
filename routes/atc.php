<?php

use App\Livewire\Atc\Area\AreaTodoLivewire;
use App\Livewire\Atc\Area\AreaCrearLivewire;
use App\Livewire\Atc\Area\AreaEditarLivewire;
use App\Livewire\Atc\Area\AreaUserLivewire;
use App\Livewire\Atc\Area\AreaSolicitudLivewire;

use App\Livewire\Atc\TipoSolicitud\TipoSolicitudTodoLivewire;
use App\Livewire\Atc\TipoSolicitud\TipoSolicitudCrearLivewire;
use App\Livewire\Atc\TipoSolicitud\TipoSolicitudEditarLivewire;

use App\Livewire\Atc\EstadoTicket\EstadoTicketTodoLivewire;
use App\Livewire\Atc\EstadoTicket\EstadoTicketCrearLivewire;
use App\Livewire\Atc\EstadoTicket\EstadoTicketEditarLivewire;

use App\Livewire\Atc\Canal\CanalTodoLivewire;
use App\Livewire\Atc\Canal\CanalCrearLivewire;
use App\Livewire\Atc\Canal\CanalEditarLivewire;

use App\Livewire\Atc\Ticket\TicketTodoLivewire;
use App\Livewire\Atc\Ticket\TicketCrearLivewire;
use App\Livewire\Atc\Ticket\TicketEditarLivewire;
use App\Livewire\Atc\Ticket\TicketDerivadoLivewire;

use App\Livewire\Atc\Reporte\ReporteLivewire;

use App\Livewire\Atc\EstadoCita\EstadoCitaTodoLivewire;
use App\Livewire\Atc\EstadoCita\EstadoCitaCrearLivewire;
use App\Livewire\Atc\EstadoCita\EstadoCitaEditarLivewire;

use App\Livewire\Atc\Cita\CitaTodoLivewire;
use App\Livewire\Atc\Cita\CitaCalendarioLivewire;
use App\Livewire\Atc\Cita\CitaCrearLivewire;
use App\Livewire\Atc\Cita\CitaEditarLivewire;

use App\Livewire\Atc\ReporteCita\ReporteCitaLivewire;

use Illuminate\Support\Facades\Route;

Route::prefix('area')->name('area.vista.')->group(function () {
    Route::get('/', AreaTodoLivewire::class)->name('todo');
    Route::get('/crear', AreaCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', AreaEditarLivewire::class)->name('editar');
    Route::get('/user/{id}', AreaUserLivewire::class)->name('user');
    Route::get('/solicitud/{id}', AreaSolicitudLivewire::class)->name('solicitud');
});

Route::prefix('tipo-solicitud')->name('tipo-solicitud.vista.')->group(function () {
    Route::get('/', TipoSolicitudTodoLivewire::class)->name('todo');
    Route::get('/crear', TipoSolicitudCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', TipoSolicitudEditarLivewire::class)->name('editar');
});

Route::prefix('estado-ticket')->name('estado-ticket.vista.')->group(function () {
    Route::get('/', EstadoTicketTodoLivewire::class)->name('todo');
    Route::get('/crear', EstadoTicketCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', EstadoTicketEditarLivewire::class)->name('editar');
});

Route::prefix('canal')->name('canal.vista.')->group(function () {
    Route::get('/', CanalTodoLivewire::class)->name('todo');
    Route::get('/crear', CanalCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', CanalEditarLivewire::class)->name('editar');
});

Route::prefix('ticket')->name('ticket.vista.')->group(function () {
    Route::get('/', TicketTodoLivewire::class)->name('todo');
    Route::get('/crear', TicketCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', TicketEditarLivewire::class)->name('editar');
    Route::get('/derivado/{id}', TicketDerivadoLivewire::class)->name('derivado');
});

Route::prefix('reporte-ticket')->name('reporte-ticket.vista.')->group(function () {
    Route::get('/', ReporteLivewire::class)->name('todo');
});

Route::prefix('estado-cita')->name('estado-cita.vista.')->group(function () {
    Route::get('/', EstadoCitaTodoLivewire::class)->name('todo');
    Route::get('/crear', EstadoCitaCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', EstadoCitaEditarLivewire::class)->name('editar');
});

Route::prefix('cita')->name('cita.vista.')->group(function () {
    Route::get('/', CitaTodoLivewire::class)->name('todo');
    Route::get('/calendario', CitaCalendarioLivewire::class)->name('calendario');
    Route::get('/crear', CitaCrearLivewire::class)->name('crear');
    Route::get('/editar/{id}', CitaEditarLivewire::class)->name('editar');
});

Route::prefix('reporte-cita')->name('reporte-cita.vista.')->group(function () {
    Route::get('/', ReporteCitaLivewire::class)->name('todo');
});
