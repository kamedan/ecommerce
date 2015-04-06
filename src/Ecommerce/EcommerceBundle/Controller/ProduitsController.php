<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('EcommerceBundle:default:produits/layout/produits.html.twig');
    }
    
    public function presentationAction()
    {
        return $this->render('EcommerceBundle:default:produits/layout/presentation.html.twig');
    }
}
