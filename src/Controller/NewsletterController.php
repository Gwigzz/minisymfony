<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\Type\NewsletterType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsletterController extends AbstractController
{
    public function indexNewsletter(): Response
    {

        // creates a newsletter object and initializes some data for this example
        $newsletter = new Newsletter();

        $form = $this->createForm(NewsletterType::class, $newsletter);

        return $this->renderForm('newsletter/newsletter.index.twig',[
            'formnewsletter' => $form,
        ]);
    }
}
