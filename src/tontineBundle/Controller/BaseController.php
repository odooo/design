<?php

namespace tontineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class BaseController extends Controller
{
    protected function getEntityManager()
    {
        return $this->getDoctrine()->getManager();
    }
    
    protected function getRepository($entity)
    {
        return $this->getEntityManager()->getRepository($entity);
    }

    protected function getBienManager()
    {
        return $this->get('tontine.manager.bien');
    }

    public function back()
    {
        $referer = $this->getRequest()->headers->get('referer');

        return $this->redirect($referer);
    }
}