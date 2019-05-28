<?php

namespace AssociationBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\HttpFoundation\Request;
class AssociationController extends Controller
{
    public function associationAction()
    {
        return $this->render('@Association/Default/association.html.twig');
    }


}
