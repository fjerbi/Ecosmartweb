<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository("AppBundle:Annonce")
            ->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',array(
           "annonces"=>$annonces
        ));

    }
    /**
     * @Route("/aboutus", name="aboutus")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }
}
