<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    
    #[Route('/', name: 'home_page')]
    public function index(): Response
    {
        return $this->render('home/home.index.twig');
    }
}
