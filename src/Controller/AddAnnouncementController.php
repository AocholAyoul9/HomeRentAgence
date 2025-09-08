<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AddAnnouncementController extends AbstractController
{
    #[Route('/add/announcement', name: 'app_add_announcement')]
    public function index(): Response
    {
        return $this->render('add_announcement/index.html.twig', [
            'controller_name' => 'AddAnnouncementController',
        ]);
    }
}
