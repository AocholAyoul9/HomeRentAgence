<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ApartmentsListController extends AbstractController
{
    #[Route('/apartments/list', name: 'app_apartments_list')]
    public function index(): Response
    {
        return $this->render('apartments_list/index.html.twig', [
            'controller_name' => 'ApartmentsListController',
        ]);
    }
}
