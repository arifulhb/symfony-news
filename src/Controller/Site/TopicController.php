<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'topic.')]
class TopicController extends AbstractController
{
    #[Route('/{topic}', name: 'index', methods: ['GET', 'HEAD'])]
    public function index(string $topic): Response
    {
        return $this->render('site/topic/index.html.twig', [
            'controller_name' => 'TopicController:: ' . $topic,
        ]);
    }
}
