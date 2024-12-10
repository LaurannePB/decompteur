<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/iNx2bTMIwsRbqHH6ZuiNPQ')]
class AdminController extends AbstractController
{

    #[Route('/', name: 'app_admin_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $images = $entityManager->getRepository(Image::class)->findAll();

        return $this->render('Pages/Admin/list.html.twig', [
            'images' => $images
        ]);
    }

    #[Route('/add', name: 'app_admin_add')]
    public function add(): Response
    {
        return $this->render('Pages/Admin/add.html.twig');
    }

    #[Route('/delete/{id}', name: 'app_admin_delete', requirements: ['id' => '\d+'])]
    public function delete(Image $image, EntityManagerInterface $entityManager): RedirectResponse
    {
        $entityManager->remove($image);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin_list');
    }
}