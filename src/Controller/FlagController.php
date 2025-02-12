<?php
namespace App\Controller;

use App\Service\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FlagController extends AbstractController
{
    private ApiService $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    #[Route('/flags', name: 'flags')]
    public function list(): Response
    {
        $products = $this->apiService->getProducts();

        return $this->render('flags.html.twig', [
            'products' => $products
        ]);
    }
}
