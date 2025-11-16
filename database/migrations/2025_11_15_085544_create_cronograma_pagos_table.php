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
        Schema::create('cronograma_pagos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('venta_id')->constrained('ventas')->onDelete('cascade');

            $table->integer('numero_cuota');
            $table->date('fecha_vencimiento');
            $table->decimal('valor_cuota', 12, 2);

            $table->decimal('monto_cuota_vencida', 12, 2)->default(0);
            $table->integer('dias_vencimiento')->default(0);
            $table->decimal('penalidad', 12, 2)->default(0);
            $table->decimal('monto_restante', 12, 2)->default(0);
            
            $table->enum('estado', ['pendiente', 'pagado', 'vencido', 'reprogramado'])->default('pendiente');

            $table->string('codigo_banco')->nullable();
            $table->string('nombre_banco')->nullable();
            $table->string('medio_pago')->nullable();

            $table->decimal('monto_pagado_acumulado', 12, 2)->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronograma_pagos');
    }
};
