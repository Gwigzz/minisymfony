<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Home Page
     */
    public function index(): Response
    {
        return $this->render('home/home.index.twig', []);
    }
}
