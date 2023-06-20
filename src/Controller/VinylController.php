<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;



class VinylController
{

    
    #[Route('/home')]
    public function homepage(): Response
    {
        return new Response("Vinyls are excelent");
    }

    #[Route(path: '/browse/{slug}', name: 'browse', methods: ['GET'])]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        }
        else {
            $title = 'All Genres';
        }
        return new Response($title);
    }

}