<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SlinController extends Controller
{
    private $remoteBase = "https://aybarcorp.com/slin";

    /** 1. Probar cliente */
    public function probarCliente()
    {
        $dni = "41870082";

        $response = Http::get("{$this->remoteBase}/cliente/{$dni}");

        return $response->json();
    }

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
