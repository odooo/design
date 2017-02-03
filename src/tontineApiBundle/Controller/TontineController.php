<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tontineApiBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use tontineBundle\Entity\Tontine;

/**
 * Description of ClientController
 *
 */
class TontineController extends BaseController
{
           
    /**
     * @Rest\Post("/tontines")
     * @Rest\View()
     */
    public function postTontineAction(Request $request)
    {
        $tontine = new Tontine();
        $form = $this->createForm('tontineBundle\Form\Type\TontineType', $tontine, array('csrf_protection' => false));
         
        $form->submit($request->request->all());

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            return $tontine;
        }
        
        return $form;
    }            
   
    /**
     * @Rest\View()
     * @Rest\Get("/clients/{id}/tontines")	
     */
    public function getClientTontinesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $tontines = $em->getRepository('tontineBundle:Tontine')->findBy(array('client'=>$id));
        return $tontines;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/tontines/{id}/mises")
     */
    public function getTontineMisesActions($id)
    {
        return $this->getRepository('tontineBundle:DepotMise')->findBy(['tontine' => $id]);
    }
}

