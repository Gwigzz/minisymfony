<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('FirstName', TextType::class,[
                'attr' => [
                    'placeholder' => 'First Name'
                ]
            ])
            ->add('LastName', TextType::class, [
                'attr' => [
                    'placeholder' => 'Last Name'
                ]
            ])
            ->add('Valider', SubmitType::class)
        ;
    }
}
