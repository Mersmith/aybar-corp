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
        Schema::create('separacion_lotes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');

            $table->foreignId('lote_id')->constrained('lotes')->onDelete('cascade');

            $table->decimal('monto', 12, 2);
            $table->date('fecha_separacion');

            $table->enum('estado', ['activa', 'usada_en_venta', 'cancelada'])->default('activa');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['lote_id', 'estado'], 'unique_separacion_activa')->where('estado', 'activa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('separacion_lotes');
    }
};
