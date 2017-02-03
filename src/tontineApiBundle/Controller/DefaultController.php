<?php

namespace tontineApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('tontineApiBundle:Default:index.html.twig');
    }
}
