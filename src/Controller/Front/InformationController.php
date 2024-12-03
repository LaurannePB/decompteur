<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InformationController extends AbstractController
{

    #[Route('/project', name: 'app_information_project')]
    public function project(): Response
    {
        return $this->render('Pages/Front/Information/project.html.twig');
    }

    #[Route('/me', name: 'app_information_me')]
    public function me(): Response
    {
        return $this->render('Pages/Front/Information/me.html.twig');
    }

    #[Route('/contact', name: 'app_information_contact')]
    public function contact(): Response
    {
        return $this->render('Pages/Front/Information/contact.html.twig');
    }
}