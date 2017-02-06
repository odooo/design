<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tontineBundle\EntityListener;


use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
/**
 * Description of TontineEntityListener
 *
 * @author crrs
 */
class TontineEntityListener {
    
    private $tokenStorage;

    public function __construct(TokenStorage $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function prePersist($entity)
    {
        if (method_exists($entity, 'setCreatedAt')) {
            $entity->setCreatedAt(new \DateTime());
        } 

        if (method_exists($entity, 'setCreatedBy')) {
            $user = $this->getUser();
            if($user and $user instanceof \tontineBundle\Entity\Agent) {
                $entity->setCreatedBy($user);
            }
        }            
    }
    
    public function preFlush($entity)
    {
        if (method_exists($entity, 'setUpdatedAt')) {
            $entity->setUpdatedAt(new \DateTime());
        }

        if (method_exists($entity, 'setUpdatedBy')) {
            $user = $this->getUser();
            if($user and $user instanceof \tontineBundle\Entity\Agent) {
                $entity->setUpdatedBy($user);
            }   
        }            
    }

    private function getUser()
    {
        $token = $this->tokenStorage->getToken();

        if ($token) {
            return $token->getUser();
        }

        return null;
    }
}
