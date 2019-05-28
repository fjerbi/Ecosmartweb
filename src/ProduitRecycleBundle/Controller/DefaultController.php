<?php

namespace ProduitRecycleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProduitRecycleBundle:Default:index.html.twig');
    }
}
