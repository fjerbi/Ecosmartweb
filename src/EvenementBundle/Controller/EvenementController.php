<?php

namespace EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EvenementController extends Controller
{
    public function eventAction()
    {
        return $this->render('@Evenement/Default/event.html.twig');
    }
}
