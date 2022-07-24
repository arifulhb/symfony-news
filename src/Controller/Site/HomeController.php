<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'home.')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        return $this->render('site/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
