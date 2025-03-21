<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AnalisisApiService
{
    protected $analisisApiUrl;

    protected $token;

    public function __construct()
    {
        $this->analisisApiUrl = config('services.analisis.api_url');
        $this->token = config('services.analisis.api_token');
    }

    public function call(string $endpoint, array $params = []): array
    {
        $response = Http::withToken($this->token)
            ->get("{$this->analisisApiUrl}/{$endpoint}", $params);

        if ($response->failed()) {
            throw new \Exception('Error fetching data from Analisis API');
        }

        return $response->json();
    }
}
