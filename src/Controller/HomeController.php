<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    
    #[Route('/', name: 'home_page')]
    public function index(): Response
    {

       /*  $session = new Session(); */
        /* $session->start(); */

        // add flash messages
       /* $f = $session->getFlashBag()->add(
            'wow',
            'You\'r config is DEADDDDDD and BROKKEN'
        );
        dump($f); */

     /*    $flash = $this->s */

        return $this->render('home/home.index.twig', [
            /* 'session' => $session */
        ]);
    }
}
