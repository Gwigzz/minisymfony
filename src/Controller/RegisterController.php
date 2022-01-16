<?php

namespace App\Controller;

use App\Entity\RegisterEntity;
use App\Form\Type\RegisterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends Controller

{

    #[Route('register', name: 'register_page')]
    public function registerIndex(Request $request): Response
    {
        $register = new RegisterEntity();
        $form = $this->createForm(RegisterType::class, $register);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            // dump($form->getData());
            $this->sess->getFlashBag()->add('register_alert', $register->getFirstname());

            return $this->redirectToRoute('register_page');
        }


        return $this->render('register/register.index.twig', [
            'registerForm' => $form->createView(),
            'register_alert' => $this->sess->getFlashBag()->get('register_alert')
        ]);
    }
}
