<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace tontineBundle\Counters;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of MenuCounters
 *
 * @author crrs
 */
class MenuCounters
{
    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    private $entityManager;
    
    private $container;
    
    /**
     * Constructeur
     */
    public function __construct(ObjectManager $entityManager, ContainerInterface $container)
    {   
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

}

