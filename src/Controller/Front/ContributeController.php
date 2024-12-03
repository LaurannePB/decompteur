<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContributeController extends AbstractController
{

    #[Route('/contribute', name: 'app_contribute_form')]
    public function form(): Response
    {
        return $this->render('Pages/Front/Contribute/form.html.twig');
    }
}