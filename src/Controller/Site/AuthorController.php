<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/authors', name: 'authors.')]
class AuthorController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET', 'HEAD'])]
    public function index(): Response
    {
        return $this->render('site/author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/{author}', name: 'author', requirements: ['author' => '^[a-z][-a-z0-9_]*$'], methods: ['GET', 'HEAD'])]
    public function author(string $author): Response
    {
        return $this->render('site/author/author.html.twig', [
            'controller_name' => 'AuthorController:: ' . $author ,
        ]);
    }
}
