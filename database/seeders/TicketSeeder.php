<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Area;
use App\Models\TipoSolicitud;
use App\Models\Canal;
use App\Models\EstadoTicket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener valores necesarios
        $cliente = User::where('role', 'cliente')->first();
        $admin   = User::where('role', 'admin')->first();

        $area    = Area::first();
        $tipo    = TipoSolicitud::first();
        $canal   = Canal::first();
        $estado  = EstadoTicket::where('nombre', 'Abierto')->first();

        // Lista de asuntos y descripciones aleatorios
        $asuntos = [
            'No puedo acceder a mi cuenta',
            'Consulta sobre factura',
            'Problema con mi pedido',
            'No recibí respuesta del soporte',
            'Mi pago fue rechazado',
            'Error al cargar documento',
            'Solicitud de actualización de datos',
            'No puedo cambiar mi contraseña',
            'Consulta sobre promociones',
            'Problema con el aplicativo móvil',
        ];

        $descripciones = [
            'Tengo este problema desde ayer.',
            'Solicito ayuda urgente.',
            'Adjunté captura del error.',
            'Requiero orientación, por favor.',
            'No sé cómo proceder.',
            'Ya intenté varias veces y nada.',
            'Agradezco su pronta respuesta.',
            'Me aparece un mensaje de error.',
            'No puedo finalizar el proceso.',
            'Mi caso sigue sin resolverse.',
        ];

        // Crear 20 tickets
        for ($i = 0; $i < 20; $i++) {

            Ticket::create([
                'cliente_id'          => $cliente?->id ?? 1,
                'area_id'             => $area?->id ?? null,
                'tipo_solicitud_id'   => $tipo?->id ?? null,
                'canal_id'            => $canal?->id ?? null,
                'estado_ticket_id'    => $estado?->id ?? 1,
                'usuario_asignado_id' => $admin?->id ?? null,

                'asunto_inicial'              => $asuntos[array_rand($asuntos)],
                'descripcion_inicial'         => $descripciones[array_rand($descripciones)],
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }
}
