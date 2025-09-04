<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\PropertyService;
final class PropertyController extends AbstractController
{
    private  $propertyService;
    public function __construct(PropertyService $propertyService){
        $this->propertyService = $propertyService;
    }
    #[Route('/property', name: 'app_property')]
    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }
}
