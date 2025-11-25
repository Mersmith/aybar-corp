<?php

use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckCliente;
use App\Http\Middleware\CheckSocio;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web'])
            //Route::middleware(['web', 'check.admin'])
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware(['web', 'verified', 'check.cliente'])
                ->prefix('cliente')
                ->name('cliente.')
                ->group(base_path('routes/cliente.php'));

            Route::middleware(['web', 'verified', 'check.socio'])
                ->prefix('socio')
                ->name('socio.')
                ->group(base_path('routes/socio.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'check.admin' => CheckAdmin::class,
            'check.cliente' => CheckCliente::class,
            'check.socio' => CheckSocio::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
