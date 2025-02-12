<?php
namespace App\Service;

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiService
{
    private HttpClientInterface $client;
    private string $apiBaseUrl;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->apiBaseUrl = 'http://127.0.0.1:8000/api'; // Assure-toi que c'est bien l'URL de ton API
    }

    public function getProducts(): array
    {
        $response = $this->client->request('GET', $this->apiBaseUrl . '/products');

        return $response->toArray();
    }
}
