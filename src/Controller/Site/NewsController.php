<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'news.')]
class NewsController extends AbstractController
{
    #[Route('/{year}/{month}/{day}/{slug}', name: 'index', methods: ['GET', 'HEAD'])]
    public function index(int $year, int $month, int $day, string $slug): Response
    {
        $slug = "/$year/$month/$day/$slug";

        return $this->render('site/news/index.html.twig', [
            'controller_name' => 'NewsController:: ' . $slug,
        ]);
    }
}
