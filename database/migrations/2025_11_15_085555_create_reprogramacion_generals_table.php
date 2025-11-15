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
        Schema::create('reprogramacion_generals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('venta_id')->constrained('ventas')->onDelete('cascade');

            $table->decimal('saldo_anterior', 12, 2);
            $table->decimal('nuevo_total', 12, 2);
            $table->integer('nueva_cantidad_cuotas');

            $table->text('motivo');

            $table->foreignId('usuario_id')->constrained('users')->onDelete('restrict');

            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reprogramacion_generals');
    }
};
