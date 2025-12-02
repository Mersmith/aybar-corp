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
        Schema::create('cliente_unidad_negocio', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');

            $table->foreignId('unidad_negocio_id')->constrained('unidad_negocios')->onDelete('cascade');

            $table->string('codigo')->nullable(); // EJ: C20366
            $table->string('id_empresa')->nullable(); // EJ: 014

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_unidad_negocio');
    }
};
