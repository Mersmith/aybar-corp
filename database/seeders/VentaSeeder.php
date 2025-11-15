<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Lote;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = Cliente::all();
        $lotes = Lote::all();

        foreach ($clientes as $cliente) {

            $lote = $lotes->random(); // lote al azar
            $precio = rand(20000, 80000);

            Venta::create([
                'cliente_id' => $cliente->id,
                'lote_id' => $lote->id,
                'fecha_venta' => now()->subDays(rand(10, 200)),
                'precio_total' => $precio,
                'inicial' => $precio * 0.20,
                'saldo_inicial' => $precio * 0.80,
                'saldo_pendiente' => $precio * 0.80,
                'estado' => 'activa'
            ]);
        }
    }
}
