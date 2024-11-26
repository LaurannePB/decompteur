<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{

    #[Route('/', name: 'app_home_index')]
    public function index(): Response
    {
        return new Response('Hello World');
    }
}