<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'article.')]
class ArticleController extends AbstractController
{
    #[Route('/{slug}/{id}', name: 'index',  requirements: ['id' => '\d+'])]
    public function index(string $slug, int $id): Response
    {
        $slug = "/$slug/$id";
        return $this->render('site/article/index.html.twig', [
            'controller_name' => 'ArticleController:: ' .  $slug,
        ]);
    }
}
