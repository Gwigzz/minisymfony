<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\Type\NewsletterType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsletterController extends AbstractController
{
    #[Route('/newsletter', name: 'newsletter_page')]
    public function indexNewsletter(): Response
    {

        // creates a newsletter object and initializes some data for this example
        $newsletter = new Newsletter();

        $form = $this->createForm(NewsletterType::class, $newsletter);

        return $this->render('newsletter/newsletter.index.twig',[
            'formnewsletter' => $form->createView(),
        ]);
    }
}
