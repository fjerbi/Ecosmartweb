<?php

namespace ProduitRecycleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitRecyceController extends Controller
{
    public function produitAction()
    {
        return $this->render('@ProduitRecycle/Default/produits.html.twig');
    }
}
