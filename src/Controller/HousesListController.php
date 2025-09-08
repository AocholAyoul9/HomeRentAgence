<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HousesListController extends AbstractController
{
    #[Route('/houses/list', name: 'app_houses_list')]
    public function index(): Response
    {
        return $this->render('houses_list/index.html.twig', [
            'controller_name' => 'HousesListController',
        ]);
    }
}
