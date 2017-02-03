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
use tontineBundle\Entity\Contrat;
/**
 * Description of ClientController
 *
 */
class ContratController extends BaseController{
    
    
    
    public function generateCode(){
         
            $code = uniqid(mt_rand(), true); 
           
            return $code;
    } 
    
    
    
    
    /**
     * @Rest\Post("/contrat/new")
     * @Rest\View()
     */
    public function postContratAction(Request $request){
        $contrat = new Contrat();
         
        $form = $this->createForm('tontineBundle\Form\Type\ContratType', $contrat,array('csrf_protection' => false));
        $contrat = $this->handleForm($request, $form);
        if($contrat)return $contrat; 
        return $form;
    }
    
    public function handleForm(Request $request, $form)
    {
        $form->submit($request->request->all());
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $contrat = $form->getData();
            
            $file=$form->getData()->getPiece();
            if($file->getDossier()){
                        
                        $filename = 'CONTRAT'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$file->getDossier()->getClientOriginalName();
                        $file->getDossier()->move($this->getParameter('pieces_path'), $filename);
                        $file->setDossier($filename);
                        
            }      
            
            $contrat->setCode($this->generateCode());
            $em->persist($contrat);
            $em->flush();

            return $contrat;
        }

        return null;
    }
    
    
     /**
	* @Rest\View()
	* @Rest\Get("/contrat/{id}/liste")
	*/
	public function getListeContratAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$contrats= $em->getRepository('tontineBundle:Contrat')->findBy(array('client'=>$id));
	 	return $contrats; 		
	}
}

