<?php

namespace App\Services;

use App\Interfaces\ProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class ProviderService implements ProviderInterface
{
    protected string $urlFormat;

    function __construct(private readonly HttpClientInterface $client)
    {
    }

    public function getProductDataByItemId(int $itemId): string
    {
        $response = $this->makeRequestToProviderApiToGetProductByItemId($itemId);
        $body = json_decode($response->getContent(), 'json');
        $productData = $this->extractProductData($body);

        return $this->json($productData);
    }

    protected function extractProductData(array $body): array
    {
        return [];
    }

    private function makeRequestToProviderApiToGetProductByItemId(array $itemId): ResponseInterface
    {
        return $this->client->request('GET', sprintf($this->urlFormat), $itemId);
    }
}
