<?php

namespace App\Interfaces;

interface ProductProviderInterface
{
    public function getProductDataByItemId(int $itemId): string;

}
