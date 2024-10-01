<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VintedHomeController extends AbstractController
{
    #[Route('/vinted/home', name: 'app_vinted_home')]
    public function index(): Response
    {
        return $this->render('vinted_home/index.html.twig', [
            'controller_name' => 'VintedHomeController',
        ]);
    }
}
