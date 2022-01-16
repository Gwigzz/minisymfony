<?php

namespace App\Controller;

use App\Entity\NewsletterEntity;
use App\Form\Type\NewsletterType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterController extends Controller
{
    #[Route('/newsletter', name: 'newsletter_page')]
    public function indexNewsletter(): Response
    {

        // creates a newsletter object and initializes some data for this example
        $newsletter = new NewsletterEntity();

        $form = $this->createForm(NewsletterType::class, $newsletter);

        return $this->render('newsletter/newsletter.index.twig',[
            'formnewsletter' => $form->createView(),
        ]);
    }
}
