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
class RechercheBienController extends BaseController
{
    private function estimatePrice($mode, $montant, $duree)
    {
        $price = $duree * $montant;
        return $price;
    }

    /**
     * @Rest\Get("/biens")
     * @Rest\View()
     */
    public function biensAction(Request $request)
    {
        return $this->getBienManager()->findAll();
    }

    /**
     * @Rest\Get("/biens/{code}")
     * @Rest\View()
     */
    public function getBienAction(Request $request, $code)
    {
        return $this->getBienManager()->findByCode($code);
    }

    
    /**
     * @Rest\Get("/biens/search")
     * @Rest\View()
     */
    public function searchBiensAction(Request $request)
    {
        $mode = $request->get('mode', 'j'); 
        $montant = $request->get('mise', 1000); 
        $dureeMin = $request->get('dureeMin', 30); 
        $dureeMax = $request->get('dureeMax', 90);

        $biens = $this->getBienManager()->findByIntervalPrice($this->estimatePrice($mode, $montant, $dureeMin),$this->estimatePrice($mode, $montant, $dureeMax));
                    
        //var_dump($biens);
        //die();
        return $biens ;
    }
}
