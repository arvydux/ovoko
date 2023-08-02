<?php

namespace App\Services;

class ProviderBService extends ProviderService
{
    const USD_RATE = 1.2;
    protected string $urlFormat = 'http://api2mock:8080/get_product?id=%s';

    protected function extractProductData(array $body): array
    {
        return [
            'id' => $body['id'],
            'name' => $body['name'],
            'price' => [
                'amount' => $body['price'] * self::USD_RATE, //convert to USD
                'currency' => 'USD',
            ],
        ];
    }
}
