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

            $table->foreignId('estado_comprobante_pago_id')->default(1)->constrained('estado_comprobante_pagos')->onDelete('restrict');

            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->onDelete('restrict');

            $table->foreignId('usuario_valida_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('razon_social')->nullable();
            $table->string('proyecto')->nullable();
            $table->string('manzana')->nullable();
            $table->string('lote')->nullable();
            $table->string('codigo_cuota')->nullable();
            $table->string('numero_cuota')->nullable();

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
