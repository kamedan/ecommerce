<?php

namespace Pages\pagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function pagesAction($id)
    {
        
        return $this->render('PagesBundle:default:Pages/layout/pages.html.twig');
    }
}
