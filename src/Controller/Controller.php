<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class Controller extends AbstractController
{

    protected Session $sess;

    public function __construct()
    {

        $this->sess = new Session();
        if (session_status() === PHP_SESSION_NONE) {
            session_name('GRDSymfony');                      # session name
            $this->sess->start() ?? session_start();         # start session
        }
    }


}
