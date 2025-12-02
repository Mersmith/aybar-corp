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

            $table->foreignId('usuario_solicita_id')->constrained('users')->onDelete('cascade');

            $table->foreignId('usuario_recibe_id')->constrained('users')->onDelete('cascade');

            $table->foreignId('sede_id')->nullable()->constrained('sedes')->nullOnDelete();

            $table->foreignId('motivo_cita_id')->constrained('motivo_citas')->onDelete('restrict');

            $table->foreignId('estado_cita_id')->default(1)->constrained('estado_citas')->onDelete('restrict');

            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin')->nullable();

            $table->string('asunto_solicitud');
            $table->text('descripcion_solicitud');

            $table->string('asunto_respuesta')->nullable();
            $table->text('descripcion_respuesta')->nullable();

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
