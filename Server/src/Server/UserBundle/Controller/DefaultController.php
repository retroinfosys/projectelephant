<?php

namespace Server\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ServerUserBundle:Default:index.html.twig', array('name' => 'Prathap'));
    }
}