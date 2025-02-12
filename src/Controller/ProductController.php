<?php
namespace App\Controller;

use App\Service\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private ApiService $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    #[Route('/products', name: 'product_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $products = $this->apiService->getProducts();

        return $this->json($products);
    }
}
