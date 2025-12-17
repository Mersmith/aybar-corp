<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SlinController extends Controller
{
    private $baseUrl = "https://cloudapp.slin.com.pe:7444/activity/v1/api/aybar";
    private $user = "api_slin_aybar";
    private $password = "S!lin_AyB@r2025#SecureX";

    private $remoteBase = "https://aybarcorp.com/api/slin";

    /**
     * 1. CLIENTES
     * GET /slin/cliente/{dni}
     */
    public function getCliente($dni)
    {
        $response = Http::withBasicAuth($this->user, $this->password)
            ->get("{$this->baseUrl}/clientes/nit/{$dni}");

        if ($response->failed()) {
            return response()->json([
                'error' => true,
                'message' => 'Error consultando cliente',
                'details' => $response->body(),
            ], 500);
        }

        return $response->json();
    }

    /**
     * 2. LOTES
     * GET /slin/lotes?id_cliente=C00896&id_empresa=019
     */
    public function getLotes(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required',
            'id_empresa' => 'required',
        ]);

        $response = Http::withBasicAuth($this->user, $this->password)
            ->get("{$this->baseUrl}/lotes", [
                'id_cliente' => $request->id_cliente,
                'id_empresa' => $request->id_empresa
            ]);

        if ($response->failed()) {
            return response()->json([
                'error' => true,
                'message' => 'Error consultando lotes',
                'details' => $response->body(),
            ], 500);
        }

        return $response->json();
    }

    /**
     * 3. CUOTAS
     * GET /slin/cuotas?id_empresa=019&id_cliente=C00896&id_proyecto=005&id_etapa=01&id_manzana=F&id_lote=28.R
     */
    public function getCuotas(Request $request)
    {
        $request->validate([
            'id_empresa' => 'required',
            'id_cliente' => 'required',
            'id_proyecto' => 'required',
            'id_etapa' => 'required',
            'id_manzana' => 'required',
            'id_lote' => 'required'
        ]);

        $response = Http::withBasicAuth($this->user, $this->password)
            ->get("{$this->baseUrl}/cuotas", $request->all());

        if ($response->failed()) {
            return response()->json([
                'error' => true,
                'message' => 'Error consultando cuotas',
                'details' => $response->body(),
            ], 500);
        }

        return $response->json();
    }

    /** 1. Probar cliente */
    public function probarCliente()
    {
        $dni = "41870082";

        $response = Http::get("{$this->remoteBase}/cliente/{$dni}");

        return $response->json();
    }

    /** 2. Probar lotes */
    public function probarLotes()
    {
        $params = [
            "id_cliente" => "C00896",
            "id_empresa" => "019"
        ];

        $response = Http::get("{$this->remoteBase}/lotes", $params);

        return $response->json();
    }

    /** 3. Probar cuotas */
    public function probarCuotas()
    {
        $params = [
            "id_empresa" => "019",
            "id_cliente" => "C00896",
            "id_proyecto" => "005",
            "id_etapa" => "01",
            "id_manzana" => "F",
            "id_lote" => "28.R"
        ];

        $response = Http::get("{$this->remoteBase}/cuotas", $params);

        return $response->json();
    }
}
