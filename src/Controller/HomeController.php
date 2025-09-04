<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\PropertyService;

final class HomeController extends AbstractController
{

    private $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    #[Route('/', name: 'app_home')]
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('property/index.html.twig', [
            'maisons' => $this->propertyService->getMaisons(),
            'appartements' => $this->propertyService->getAppartements(),
        ]);
    }
}
