<?php

namespace OptimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OptimeBundle:Default:index.html.twig');
    }
}
