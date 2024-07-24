<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $website_name = "Moviz";
        return $this->render('page/index.html.twig', [
            'websiteName' => $website_name,
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $website_name = "Moviz";
        return $this->render('page/about.html.twig', [
            'websiteName' => $website_name,
        ]);
    }
}
