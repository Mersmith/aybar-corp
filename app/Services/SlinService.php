<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SlinService
{
    protected $baseUrl;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('services.slin.url'), '/');
        $this->user = config('services.slin.user');
        $this->pass = config('services.slin.pass');
    }

    /**
     * Cliente por DNI o NIT
     * GET /clientes/nit/{dni}
     */
    public function getClientePorDni(string $dni)
    {
        return $this->get("/clientes/nit/{$dni}");
    }

    /**
     * Lotes
     * GET /lotes?id_cliente=X&id_empresa=Y
     */
    public function getLotes(string $idCliente, string $idEmpresa)
    {
        return $this->get('/lotes', [
            'id_cliente' => $idCliente,
            'id_empresa' => $idEmpresa,
        ]);
    }

    /**
     * Cuotas
     * GET /cuotas?id_empresa=...&id_cliente=...&id_proyecto=...&id_etapa=...&id_manzana=...&id_lote=...
     */
    public function getCuotas(array $params)
    {
        return $this->get('/cuotas', $params);
    }

    /**
     * Helper general GET con Basic Auth
     */
    protected function get(string $endpoint, array $queryParams = [])
    {
        $url = "{$this->baseUrl}{$endpoint}";

        $response = Http::withBasicAuth($this->user, $this->pass)
            ->get($url, $queryParams);

        if ($response->failed()) {
            logger()->error('Error API SLIN', [
                'endpoint' => $endpoint,
                'query'    => $queryParams,
                'response' => $response->body(),
                'status'   => $response->status()
            ]);

            return null;
        }

        return $response->json();
    }
}
