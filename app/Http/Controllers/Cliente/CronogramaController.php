<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CronogramaController extends Controller
{
    public function index($id_empresa, $id_cliente, $id_proyecto, $id_etapa, $id_manzana, $id_lote)
    {
        $params = [
            "id_empresa" => $id_empresa,
            "id_cliente" => $id_cliente,
            "id_proyecto" => $id_proyecto,
            "id_etapa" => $id_etapa,
            "id_manzana" => $id_manzana,
            "id_lote" => $id_lote,
        ];

        $response = Http::get("https://aybarcorp.com/slin/cuotas", $params);

        if ($response->failed()) {
            return back()->with('error', 'No se pudo conectar con el servidor. Inténtelo más tarde.');
        }

        $cronograma = $response->json();

        //dd($cronograma);

        if (empty($cronograma)) {
            abort(404, 'Cronograma no encontrado.');
        }

        return view('cliente.cronograma', compact('cronograma'));
    }
}
