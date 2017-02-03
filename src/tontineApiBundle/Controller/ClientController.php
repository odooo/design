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
use tontineBundle\Entity\Client;
/**
 * Description of ClientController
 *
 * @author crrs
 */
class ClientController extends BaseController{
    
    /**
     * @Rest\Post("/client/new")
     * @Rest\View()
     */
    public function postClientAction(Request $request){
        $client = new Client();
        $form = $this->createForm('tontineBundle\Form\Type\ClientType', $client, array('csrf_protection' => false));
        $client = $this->handleForm($request, $form);
        if ($client) return $client; 
        return $form;
    }
    
    public function handleForm(Request $request, $form)
    {
        $form->submit($request->request->all());
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $client = $form->getData();
            $em->persist($client);
            $em->flush();

            return $client;
        }

        return null;
    }
    
     /**
	* @Rest\View()
	* @Rest\Get("/client/liste")
	*/
	public function getListeClientAction()
	{
        $limit=10;
        $offset=0;
		$em = $this->getDoctrine()->getManager();
        //a decommenter s'il faut utiliser la pagination
		//$clients= $em->getRepository('tontineBundle:Client')->findBy(array(),null,$limit,$offset);
		$clients= $em->getRepository('tontineBundle:Client')->findAll();
	 	return $clients; 		
	}
    
    
}
