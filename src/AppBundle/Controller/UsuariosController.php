<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuariosController extends Controller
{
    public function UsuariosAction() {
        $usuarios[] = array("nombre" => "justo miguel vargas");
        $usuarios[] = array("nombre" => "john");
        $usuarios[] = array("nombre" => "peter");
        return $this->render('AppBundle::usuarios.html.twig', array('usuarios' => $usuarios));
    }
}