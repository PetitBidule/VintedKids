<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VintedHomeController extends AbstractController
{
    #[Route('/', name: 'app_vinted_home')]
    public function index(Request $request): Response
    {
        $kiwi = $request->query->get('value');
        // dd($request);
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        return $this->render('vinted_home/index.html.twig', [
            'controller_name' => 'VintedHomeController',
            'username' => $user->getEmail(),
            'id' => $user->getId(),
            'jeuneKiwi' => $kiwi
        ]);
    }
}
