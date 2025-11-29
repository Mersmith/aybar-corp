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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuario_solicita_id')
                ->constrained('users')
                ->onDelete('cascade'); //crea cita

            $table->foreignId('usuario_recibe_id')
                ->constrained('users')
                ->onDelete('cascade'); //agendado

            $table->foreignId('sede_id')
                ->nullable()
                ->constrained('sedes')
                ->nullOnDelete();

            // Relación con motivo_citas
            $table->foreignId('motivo_cita_id')
                ->constrained('motivo_citas')
                ->onDelete('restrict');

            $table->dateTime('start_at');
            $table->dateTime('end_at')->nullable();

            $table->enum('estado', [
                'pendiente',
                'confirmada',
                'cancelada',
                'rechazada'
            ])->default('pendiente');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
