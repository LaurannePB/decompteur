<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContributeController extends AbstractController
{

    #[Route('/contribute', name: 'app_contribute_form')]
    public function form(): Response
    {
        return $this->render('Pages/Contribute/form.html.twig');
    }
}