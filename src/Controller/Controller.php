<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Controller extends AbstractController
{

    public function __construct()
    {

        if (session_status() === 'PHP_SESSION_NONE') {

            $session = new Session();
            $session->start() ?? session_start();           # start session

            session_name('GRDSymfony');                     # session name
        }
    }
}
