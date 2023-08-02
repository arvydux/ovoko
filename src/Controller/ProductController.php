<?php

namespace App\Controller;

use App\Services\ProductFetcherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/get_product_data', name: 'productData', methods: ['GET'])]
    public function productData(Request $request): Response
    {
        return (new ProductFetcherService())->getProductDataFromProvider($request);
    }
}
