<?php

namespace App\Interfaces;

interface ProviderInterface
{
    public function getProductDataByItemId(int $itemId): string;

}
