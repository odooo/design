<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Journal
 *
 * @author HENOC
 */


namespace tontineBundle\EventListener;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Doctrine\ORM\Event\LifecycleEventArgs;
use tontineBundle\Entity\Journal;
use Doctrine\ORM\EntityManager;
class JournalListener 
{
    //put your code here
    private $tokenStorage;
    private $path;
   
    public function __construct(TokenStorage $tokenStorage, $path)
    {
        $this->tokenStorage = $tokenStorage;
        $this->path= $path;        
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {   
        $date = new \DateTime();
        $id = $args->getEntity()->getId();
        $filename = $this->path->getParameter('kernel.root_dir') . "/../web/uploads/logs/" . "logs".$date->format("YMd").".txt";

        if (file_exists($filename)) 
        {                    
            $fichier = fopen($filename, "a+");
            $entityName= (new \ReflectionClass($args->getEntity()))->getShortName();
            $message= "\n".$entityName." ".$token = $this->getUser()." "."Enregistrement"." ".$date->format("Y-M-d:H:i:s");
            fputs($fichier, $message);
        } else {                            
            $fichier = fopen($filename, 'a+'); 
            $message= "\n".$args->getEntity()." ".$token = $this->getUser()." "."Enregistrement"." ".$date->format("Y-M-d:H:i:s")." ".$id;
            fputs($fichier, $message);
        }
        
        fclose($fichier);       
    }
        
    public function postRemove(LifecycleEventArgs $args)
    {
        $date= new \DateTime();
        $message="";
        $id= $args->getEntity()->getId();
        $filename=$this->path->getParameter('kernel.root_dir')."/../web/uploads/logs/"."logs".$date->format("YMd").".txt";
        //$filename="tonton.txt";

        if (file_exists($filename)) {
            
            
        $fichier = fopen($filename, "a+");
        $entityName= (new \ReflectionClass($args->getEntity()))->getShortName();
        $message= "\n".$entityName." ".$token = $this->getUser()." "."Suppression"." ".$date->format("Y-M-d:H:i:s");
        fputs($fichier, $message);
        }
        else{
            
        $fichier = fopen($filename, 'a+'); 
        $message= "\n".$args->getEntity()." ".$token = $this->getUser()." "."Suppression"." ".$date->format("Y-M-d:H:i:s")." ".$id;
        fputs($fichier, $message);
        }
        fclose($fichier);
    }        
    public function postUpdate(LifecycleEventArgs $args)
    {  
    
        
                        $date= new \DateTime();
                        $message="";
                       $id= $args->getEntity()->getId();
                       $filename=$this->path->getParameter('kernel.root_dir')."/../web/uploads/logs/"."logs".$date->format("YMd").".txt";
                       //$filename="tonton.txt";

                        if (file_exists($filename)) {
                            
                            
                        $fichier = fopen($filename, "a+");
                        $entityName= (new \ReflectionClass($args->getEntity()))->getShortName();
                        $message= "\n".$entityName." ".$token = $this->getUser()." "."Mise-A-Jour"." ".$date->format("Y-M-d:H:i:s");
                        fputs($fichier, $message);
                        }
                        else{
                            
                        $fichier = fopen($filename, 'a+'); 
                        $message= "\n".$args->getEntity()." ".$token = $this->getUser()." "."Mise-A-Jour"." ".$date->format("Y-M-d:H:i:s")." ".$id;
                        fputs($fichier, $message);
                        }
                        fclose($fichier);
        }
        
        
        
        
        
        
    public function postLoad(LifecycleEventArgs $args)
    {
        
        
                        $date= new \DateTime();
                        $message="";
                       $id= $args->getEntity()->getId();
                       $filename=$this->path->getParameter('kernel.root_dir')."/../web/uploads/logs/"."logs".$date->format("YMd").".txt";
                       //$filename="tonton.txt";
                      if($this->tokenStorage->getToken()){
                        if (file_exists($filename)) {
                            
                            
                        $fichier = fopen($filename, "a+");
                        $entityName= (new \ReflectionClass($args->getEntity()))->getShortName();
                        $message= "\n".$entityName." ".$token = $this->getUser()." "."ChargerPage"." ".$date->format("Y-M-d:H:i:s");
                        fputs($fichier, $message);
                        }
                        else{
                            
                        $fichier = fopen($filename, 'a+'); 
                        $message= "\n".$args->getEntity()." ".$token = $this->getUser()." "."ChargerPage"." ".$date->format("Y-M-d:H:i:s")." ".$id;
                        fputs($fichier, $message);
                        }
                      fclose($fichier);
                      
                        }
    
    }

    private function logAction($entity, $action) 
    {

    }

    private function getUser()
    {
        $token = $this->tokenStorage->getToken();

        if ($token == null) {
            return 'Unknow';
        }

        return $token->getUser();
    }
}