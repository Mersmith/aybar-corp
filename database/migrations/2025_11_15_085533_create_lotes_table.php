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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('proyecto_id')->constrained('proyectos')->onDelete('cascade');
            $table->string('numero_lote');
            $table->string('manzana')->nullable();
            $table->decimal('area', 10, 2)->nullable();

            $table->enum('estado', ['disponible', 'reservado', 'vendido'])->default('disponible');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['proyecto_id', 'numero_lote', 'manzana'], 'unique_lote_por_proyecto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotes');
    }
};
