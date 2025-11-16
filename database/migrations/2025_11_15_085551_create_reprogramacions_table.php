<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reprogramacions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cronograma_id')->constrained('cronograma_pagos')->onDelete('cascade');

            $table->integer('numero_cuota');
            $table->date('fecha_anterior');
            $table->date('fecha_nueva');

            $table->decimal('monto_anterior', 12, 2);
            $table->decimal('monto_nuevo', 12, 2);

            $table->text('motivo');

            $table->foreignId('usuario_id')->constrained('users')->onDelete('restrict');

            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reprogramacions');
    }
};
