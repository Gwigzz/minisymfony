<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    public function indexContact(): Response
    {
        return $this->render('contact/contact.index.twig', []);
    }
}
