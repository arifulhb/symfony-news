<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Photo of the Day
 */
#[Route('/pod', name: 'pod.')]
class PodController extends AbstractController
{
    #[Route('/', name: 'pod')]
    public function index(): Response
    {
        return $this->render('site/pod/index.html.twig', [
            'controller_name' => 'PodController',
        ]);
    }

    #[Route('/{year}/{month}/{day}/{slug}',
        name: 'pod',
        requirements: ['year' => '\d+', 'month' => '\d+', 'day' => '\d+', 'slug' => '^[a-z][-a-z0-9_]*$'],
        methods: ['GET', 'HEAD']
    )]
    public function single(int $year, int $month, int $day, string $slug): Response
    {
        $slug = "/pod/$year/$month/$day/$slug";

        return $this->render('site/pod/pod.html.twig', [
            'controller_name' => 'PodController:: '. $slug,
        ]);
    }
}
