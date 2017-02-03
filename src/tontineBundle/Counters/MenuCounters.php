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

    public function countEtatVisite($etat)
    {
        return $this->entityManager
            ->getRepository('tontineBundle:Visite')
            ->count(array(
                'etat' => $etat,
            ))
        ;
    }
    
    public function  countMiseAjourCG(){
        return 1;
        $condition = $this->entityManager
            ->getRepository('tontineBundle:ConditionGenerale')
            ->findNotUpdate($this->container->getParameter('version_cg'));
        ;
        return count($condition);
    }
}

