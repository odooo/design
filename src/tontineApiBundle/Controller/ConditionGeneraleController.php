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
use tontineBundle\Entity\ConditionGenerale;
use tontineBundle\Entity\Client;
/**
 * Description of ClientController
 *
 */
class ConditionGeneraleController extends BaseController{
    
  
    
    
    
    /**
     * @Rest\Post("/cg/{idc}/new")
     * @Rest\View()
     */
    public function postConditionGeneraleAction(Request $request, $idc){
        $conditiongenerale = new ConditionGenerale();
         
        $form = $this->createForm('tontineBundle\Form\Type\ConditionGeneraleType', $conditiongenerale,array('csrf_protection' => false));
        $conditiongenerale = $this->handleForm($request, $form,$idc);
        if($conditiongenerale)return $conditiongenerale ; 
        return $form;
    }
    
    public function handleForm(Request $request, $form, $idc)
    {
        //$form->submit($request->request->all());

		$client = $this->getRepository("tontineBundle:Client")->find($idc);
       		if(!$client) throw $this->createNotFoundException("Ce client n'existe pas !");

		$form->submit(array_merge($request->request->all(), $request->files->all()));
	    
	    if ($form->isSubmitted() && $form->isValid()) {
	        $em = $this->getDoctrine()->getManager();
	       	$conditiongenerale = $form->getData();
	        
	        $file=$form->getData()->getPieces();

        	if($file){
             
		        foreach ($file as $piece) {
		            $filename = 'CG-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$piece->getDossier()->getClientOriginalName();
		            $piece->getDossier()->move($this->getParameter('pieces_path'), $filename);
            	    $piece->setDossier($filename);
            	}             
        	} 
           
                $conditiongenerale->setClient($client);
                $client->setCondition($conditiongenerale);
            
       		
        	
       
        	$em->persist($conditiongenerale);
        	$em->flush();

        	return $conditiongenerale;
    	}

        return null;
    }    
}

