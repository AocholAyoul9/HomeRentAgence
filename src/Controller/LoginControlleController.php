<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LoginControlleController extends AbstractController
{
    #[Route('/login/controlle', name: 'app_login_controlle')]
    public function index(): Response
    {
        return $this->render('login_controlle/index.html.twig', [
            'controller_name' => 'LoginControlleController',
        ]);
    }
}
