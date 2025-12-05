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
        Schema::create('comprobante_pagos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cronograma_id')
                ->nullable()
                ->constrained('cronograma_pagos')
                ->nullOnDelete();

            $table->string('path');
            $table->string('url');
            $table->string('extension');
            $table->string('numero_operacion')->nullable();
            $table->string('banco')->nullable();
            $table->decimal('monto', 10, 2)->nullable();
            $table->date('fecha')->nullable();
            $table->text('observacion')->nullable();

            $table->enum('estado', ['pendiente', 'observado', 'aprobado', 'rechazado'])
                ->default('pendiente');

            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->onDelete('restrict');

            $table->foreignId('usuario_valida_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('fecha_validacion')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobante_pagos');
    }
};
