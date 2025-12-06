<?php

use App\Http\Controllers\SlinController;
use App\Http\Controllers\CavaliSignerController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {

    Route::get('/ping', function () {
        return response()->json(['message' => 'API funcionando correctamente']);
    });

    Route::get('/test-slin/cliente', [SlinController::class, 'probarCliente']);
    Route::get('/test-slin/lotes', [SlinController::class, 'probarLotes']);
    Route::get('/test-slin/cuotas', [SlinController::class, 'probarCuotas']);

    Route::get('/cavali/signer/test', [CavaliSignerController::class, 'test']);

});
