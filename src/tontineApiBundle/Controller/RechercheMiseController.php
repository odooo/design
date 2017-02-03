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
use tontineBundle\Entity\Bien;
/**
 * 
 *
 * 
 */
class RechercheMiseController extends BaseController{
    
    
    
    
    /**
     * @Rest\Post("/biens/calculate-mise")
     * @Rest\View()
     */
    public function postMiseAction(Request $request){
      
        
                    if($request->getMethod() == 'POST'){
                        
                                $codeBien = $request->get('codeBien', 'A1');
                                $duree = $request->get('duree', 30);
                                $mode = $request->get('mode', 'journalier');                               $bien = $this->getBienManager()->findByCode($codeBien);
                                $mise = $bien->getPrice() / $duree;                  
                    } 
                  
                    //var_dump($bien->getPrice());
                    //die();
        return $mise ;
    }
    
   
}


