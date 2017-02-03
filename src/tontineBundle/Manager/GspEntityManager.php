<?php

namespace tontineBundle\Manager;
class GspEntityManager
{
    private $dbConnection;

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    protected function createEntity(array $data = array(),$name)
    {
        
        $EntityName="tontineBundle\Entity\\".$name;
        $Entity = new $EntityName();

        foreach($data as $key => $value) {
            $setter = sprintf('set%s', str_replace('_', '', $key));
            
            if (method_exists($Entity, $setter)) {
                $Entity->$setter($value);
            }
        }

        return $Entity;
    }

    protected function createEntities(array $data,$name)
    {
        $ary = [];

        foreach($data as $value) {
            $ary[] = $this->createEntity($value,$name);
        }

        return $ary;
    }


    public function findAllQuartier()
    {
        return $this->createEntities($this->dbConnection->fetchAll('SELECT DISTINCT *, code_quartier as id FROM quartier'),'Quartier');
    }

    public function findAllZone()
    {
        return $this->createEntities($this->dbConnection->fetchAll('SELECT DISTINCT *, code_zone as id FROM zone'),'Zone');
    }

}