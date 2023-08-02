<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Services\ProductFetcherService;
=======
use App\Services\ProviderService;
>>>>>>> 0ad6fe96a29ef5d684670488eeb144c228862a6d
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/get_product_data', name: 'productData', methods: ['GET'])]
    public function productData(Request $request): Response
    {
<<<<<<< HEAD
        return (new ProductFetcherService())->getProductDataFromProvider($request);
=======
        return (new ProviderService())->getProductDataFromProvider($request);
>>>>>>> 0ad6fe96a29ef5d684670488eeb144c228862a6d
    }
}
