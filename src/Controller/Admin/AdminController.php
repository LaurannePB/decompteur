<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{

    #[Route('/iNx2bTMIwsRbqHH6ZuiNPQ', name: 'app_admin_list')]
    public function list(): Response
    {
        return $this->render('Pages/Admin/list.html.twig');
    }
}