<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'photographer.')]
class PhotographerController extends AbstractController
{
    #[Route('/photographers', name: 'index', methods: ['GET', 'HEAD'], priority: 10)]
    public function index(): Response
    {
        return $this->render('site/photographer/index.html.twig', [
            'controller_name' => 'PhotographerController',
        ]);
    }

    #[Route('/{photographer}', name: 'photographer', requirements: ['photographer' => '^[a-z][-a-z0-9_]*$'], methods: ['GET', 'HEAD'])]
    public function single(string $photographer): Response
    {
        $slug = "/photographer/$photographer";

        return $this->render('site/photographer/single.html.twig', [
            'controller_name' => 'PhotographerController:: ' . $slug,
        ]);
    }
}
