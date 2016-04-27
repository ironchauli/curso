<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SeccionController extends Controller
{
    /**
     * @Route("/seccion1", name="seccion1")
     */
    public function seccion1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::seccion1.html.twig');
    }
    
    /**
     * @Route("/seccion2", name="seccion2")
     */
    public function seccion2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:seccion2.html.twig');
    }
    
    /**
     * @Route("/seccion3", name="seccion3")
     */
    public function seccion3Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::seccion3.html.twig');
    }
}