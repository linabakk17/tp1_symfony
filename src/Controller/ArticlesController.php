<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function index(): Response
    {
        $articles = [
            [
                'id' => 1,
                'titre' => 'Introduction à Symfony 7.4',
                'contenu' => 'Découverte des contrôleurs, du routage et de l\'architecture MVC.',
                'publie' => true,
            ],
            [
                'id' => 2,
                'titre' => 'Maîtriser les templates Twig',
                'contenu' => 'Héritage de templates, blocs, boucles et filtres avec Bootstrap 5.',
                'publie' => true,
            ],
            [
                'id' => 3,
                'titre' => 'Brouillon : Doctrine et MySQL',
                'contenu' => 'Article en cours de rédaction sur la gestion des entités.',
                'publie' => false,
            ],
        ];

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}