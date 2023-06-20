<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route(path: '/blog', name: 'blog_list')]
     function list(): Response
    {
        return new Response("This is the blog controller");
    }

    #[Route(path: '/blog/{slug}', name: 'blog_show')]
     function show(string $slug): Response
     {
        return new Response("Blog ". $slug ." details");
    }
}