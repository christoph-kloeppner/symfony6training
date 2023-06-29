<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route('/movie/details/{id<\d+>}', name: 'app_movie_details')]
    public function details(int $id): Response
    {
        $movie = [
            'id' => $id,
            'title' => 'Star Wars',
            'releasedAt' => new \DateTimeImmutable('25-05-1977'),
            'genre' => [
                'Action',
                'Adventure',
                'Fantasy',
            ],
        ];

        return $this->render('movie/details.html.twig', [
            'controller_name' => 'MovieController',
            'movie' => $movie,
        ]);
    }

    #[Route('/movie/show', name: 'app_movie_show')]
    public function show(): Response
    {
        $movies[] = [
            'id' => 1,
            'title' => 'Star Wars I',
            'releasedAt' => new \DateTimeImmutable('25-05-1977'),
            'genre' => [
                'Action',
                'Adventure',
                'Fantasy',
            ],
        ];
        $movies[] = [
            'id' => 2,
            'title' => 'Star Wars II',
            'releasedAt' => new \DateTimeImmutable('10-01-1979'),
            'genre' => [
                'Action',
                'Adventure',
                'Fantasy',
                'Sci-Fi',
            ],
        ];

        return $this->render('movie/show.html.twig', [
            'controller_name' => 'MovieController',
            'movies' => $movies,
        ]);
    }
}
