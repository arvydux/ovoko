<?php

namespace App\Services;

class ProviderAGetterServiceService extends ProductProviderService
{
    protected string $urlFormat = 'http://api1mock:8080/products/%s';

    protected function extractProductData(array $body): array
    {
        return [
            'id' => $body['id'],
            'name' => $body['productName'],
            'price' => [
                'amount' => $body['productPrice'],
                'currency' => 'USD',
            ],
        ];
    }
}
