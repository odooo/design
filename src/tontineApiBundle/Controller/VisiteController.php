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
use tontineBundle\Entity\Visite;
use tontineBundle\Entity\Client;

/**
 * Description of ClientController
 *
 * @author crrs
 */
class VisiteController extends BaseController{
    
    /**
     * @Rest\Post("/visite/{idc}/new")
     * @Rest\View()
     */
    public function postVisiteAction($idc, Request $request){
        $client = $this->getRepository('tontineBundle:Client')->find($idc);
        if(!$client) throw new HttpException(404, "Client not found!");
        $visite = new Visite();
        $form = $this->createForm('tontineBundle\Form\Type\VisiteType', $visite, array('csrf_protection' => false));
        $visite = $this->handleForm($request, $form, $client);
        if ($visite) return $visite; 
        return $form;
    }
    
    public function handleForm(Request $request, $form, $client)
    {
        $form->submit($request->request->all());
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $visite = $form->getData();
            $visite->setClient($client);
            $client->addVisite($visite);
            $em->persist($visite);
            $em->flush();
            return $visite;
        }
        return null;
    }
    
    
     /**
	* @Rest\View()
	* @Rest\Get("/visite/{id}/liste")
	*/
	public function getVisteAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$visites= $em->getRepository('tontineBundle:Visite')->findBy(array('client'=>$id));
	 	return $visites; 		
	}
    
    
    
}
