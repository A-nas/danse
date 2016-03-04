<?php

namespace P\DanseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PDanseBundle:Default:index.html.twig');
    }
}
