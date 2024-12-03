<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/iNx2bTMIwsRbqHH6ZuiNPQ')]
class AdminController extends AbstractController
{

    #[Route('/', name: 'app_admin_list')]
    public function list(): Response
    {
        return $this->render('Pages/Admin/list.html.twig');
    }

    #[Route('/add', name: 'app_admin_add')]
    public function add(): Response
    {
        return $this->render('Pages/Admin/add.html.twig');
    }
}