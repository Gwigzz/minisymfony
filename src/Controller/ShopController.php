<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends Controller
{

    #[Route('/shop', name: 'shop_page')]
    public function indexShop() : Response
    {
        return $this->render('shop/shop.index.twig', []);
    }
}
