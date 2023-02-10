<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('thepages/home.html.twig');
    }

    #[Route('/apropos', name: 'app_home.aboutus', methods: ['GET'])]
    public function apropos(): Response
    {
        return $this->render('thepages/aboutus.html.twig');
    }
}
