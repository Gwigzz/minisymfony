<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    #[Route('article', name: 'article_page')]
    public function article() : Response
    {
        return $this->render('article/article.index.twig');
    }
}
