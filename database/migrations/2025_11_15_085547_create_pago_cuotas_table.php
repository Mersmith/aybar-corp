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
        Schema::create('pago_cuotas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cronograma_id')->constrained('cronograma_pagos')->onDelete('cascade');

            $table->date('fecha_pago');
            $table->decimal('monto_pagado', 12, 2);

            $table->string('medio_pago');
            $table->string('banco')->nullable();
            $table->string('codigo_operacion')->nullable();
            $table->text('observacion')->nullable();

            $table->foreignId('usuario_id')->constrained('users')->onDelete('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_cuotas');
    }
};
