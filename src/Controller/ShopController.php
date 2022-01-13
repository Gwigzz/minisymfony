<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{
    /**
     * Index Shop
     */
    public function indexShop() : Response
    {
        return $this->render('shop/shop.index.twig', []);
    }
}
