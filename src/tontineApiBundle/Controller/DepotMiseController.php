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
use tontineBundle\Entity\DepotMise;
use tontineBundle\Form\Type\DepotMiseType;

/**
 * Description of ClientController
 *
 */
class DepotMiseController extends BaseController
{
           
    /**
     * @Rest\Post("/mises")
     * @Rest\View()
     */
    public function postDepotMiseAction(Request $request){
        $depotmise= new DepotMise();
         
        $form = $this->createForm(DepotMiseType::class, $depotmise,array('csrf_protection' => false));
        $depotmise = $this->handleForm($request, $form);
        if($depotmise)return $depotmise; 
        return $form;
    }
    
    public function handleForm(Request $request, $form)
    {
        $form->submit($request->request->all());
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $depotmise = $form->getData();
      
            $em->persist($depotmise);
            $em->flush();

            return $depotmise;
        }

        return null;
    }
    
   
    /**
	* @Rest\View()
	* @Rest\Get("/depot-mise/{id}/liste")
	*/
	public function getListeDepotMiseAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$depotmises= $em->getRepository('tontineBundle:DepotMise')->findBy(array('client'=>$id));
	 	return $depotmises; 		
	}
}

