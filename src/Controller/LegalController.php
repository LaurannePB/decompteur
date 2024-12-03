<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LegalController extends AbstractController
{

    #[Route('/legal', name: 'app_legal_legal')]
    public function legal(): Response
    {
        return $this->render('Pages/Legal/legal.html.twig');
    }

    #[Route('/confidentiality', name: 'app_legal_confidentiality')]
    public function confidentiality(): Response
    {
        return $this->render('Pages/Legal/confidentiality.html.twig');
    }
}