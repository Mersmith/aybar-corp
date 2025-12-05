<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CavaliSignerService
{
    private $token;

    public function getToken()
    {
        try {
            $response = Http::asForm()
                ->withHeaders([
                    'x-api-key' => env('CAVALI_API_KEY')
                ])
                ->post(env('CAVALI_AUTH_URL'), [
                    'grant_type' => 'client_credentials',
                    'client_id' => env('CAVALI_CLIENT_ID'),
                    'client_secret' => env('CAVALI_CLIENT_SECRET'),
                ]);

            Log::info('Token Response', $response->json());

            return $this->token = $response->json()['access_token'] ?? null;
        } catch (\Throwable $e) {
            Log::error("Error obteniendo token Cavali: " . $e->getMessage());
            return null;
        }
    }

    public function getSigner()
    {
        $token = $this->token ?? $this->getToken();

        if (!$token) {
            return ['error' => 'No se pudo obtener token'];
        }

        try {
            $response = Http::withToken($token)
                ->withHeaders([
                    'x-api-key' => env('CAVALI_API_KEY')
                ])
                ->get(env('CAVALI_API_URL'));

            Log::info('Signer Response', $response->json());

            return $response->json();
        } catch (\Throwable $e) {
            Log::error("Error obteniendo signer: " . $e->getMessage());
            return ['error' => $e->getMessage()];
        }
    }
}
