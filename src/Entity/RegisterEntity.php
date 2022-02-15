<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class RegisterEntity
{

    #[Assert\NotBlank(
        message: 'Champ obligatoire.',
    )]
    #[Assert\Type('string')]
    #[Assert\Regex(
        pattern: '/^[a-z]+$/i',
        htmlPattern: '^[a-zA-Z]+$',
    )]
    #[Assert\Length(
        min: 3,
        max: 20,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    protected $firstname;

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }
}
