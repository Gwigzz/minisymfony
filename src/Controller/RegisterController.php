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

        dump($request);

        $register = new RegisterEntity();
        $form = $this->createForm(RegisterType::class, $register);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            // dump($form->getData());
            var_dump($register->getFirstname());
            dd();
        }


        return $this->render('register/register.index.twig', [
            'registerForm' => $form->createView()
        ]);
    }
}
