<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiService
{
    private HttpClientInterface $client;
    private string $apiBaseUrl;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->apiBaseUrl = 'http://127.0.0.1:8000/api'; // L'URL de ton API
    }

    public function getFlags(): array
    {
        $response = $this->client->request('GET', $this->apiBaseUrl . '/products');

        return $response->toArray();
    }
}
