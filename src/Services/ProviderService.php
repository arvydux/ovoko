<?php

namespace App\Services;

use OutOfRangeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TypeError;

class ProviderService
{
    public function getProductDataFromProvider(Request $request): Response
    {
        $providers = [
            'provider_a' => 'App\\Services\\ProviderAGetterServiceService',
            'provider_b' => 'App\\Services\\ProviderBGetterServiceService',
        ];

        $data = json_decode($request->getContent(), true);

        try {
            return (new $providers[$data['marketplace']]->getProductDataByItemId($data['item_id']));
        } catch (TypeError $e) {
            return $this->json(['error' => 'Item ID should be set and be numeric'], Response::HTTP_BAD_REQUEST);
        } catch (OutOfRangeException  $e) {
            return $this->json(['error' => 'Correct marketplace id should be set'], Response::HTTP_BAD_REQUEST);
        }
    }
}
