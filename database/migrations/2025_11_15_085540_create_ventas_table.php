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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('lote_id')->constrained('lotes')->onDelete('cascade');

            $table->date('fecha_venta');
            $table->decimal('precio_total', 12, 2);
            $table->decimal('inicial', 12, 2);

            $table->decimal('saldo_inicial', 12, 2);
            $table->decimal('saldo_pendiente', 12, 2);

            $table->enum('estado', ['activa', 'cancelada', 'reprogramada', 'anulada'])->default('activa');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
