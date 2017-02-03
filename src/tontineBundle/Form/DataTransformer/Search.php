<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tontineBundle\Form\DataTransformer;

/**
 * Description of Search
 *
 * @author crrs
 */
class Search {
    /**
     * @var String
     */
    private $quartier;
    
   /**
     * @var String
     */
    private $zone;

    /**
     * @var string
     */
    private $code;

    /**
     * @var int
     */
    private $mise;
    
    /**
     * @var tontineBundle\Entity\TypeTontine
     */
    private $mode;
    
    function getQuartier() {
        return $this->quartier;
    }

    function setQuartier(String $quartier) {
        $this->quartier = $quartier;
    }
    
    function getZone() {
        return $this->zone;
    }

    function getCode() {
        return $this->code;
    }

    function getMise() {
        return $this->mise;
    }

    function getMode() {
        return $this->mode;
    }

    function setZone(String $zone) {
        $this->zone = $zone;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setMise($mise) {
        $this->mise = $mise;
    }

    function setMode(\tontineBundle\Entity\TypeTontine $mode) {
        $this->mode = $mode;
    }


    
}
