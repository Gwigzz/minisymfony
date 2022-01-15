<?php

namespace App\Controller;

use App\Entity\RegisterEntity;
use App\Form\Type\RegisterType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegisterController extends AbstractController
{

    #[Route('register', name: 'register_page')]
    public function registerIndex() : Response
    {

        $register = new RegisterEntity();
        
        $form = $this->createForm(RegisterType::class);

        return $this->render('register/register.index.twig',[
            'registerForm' => $form->createView()
        ]);
    }
}
