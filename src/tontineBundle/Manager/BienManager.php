<?php

namespace tontineBundle\Manager;

use tontineBundle\Entity\Bien;

class BienManager
{
    private $dbConnection;

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    protected function createBien(array $data = array())
    {
        $bien = new Bien();

        foreach($data as $key => $value) {
            $setter = sprintf('set%s', str_replace('_', '', $key));
            
            if (method_exists($bien, $setter)) {
                $bien->$setter($value);
            }
        }

        return $bien;
    }

    protected function createBiens(array $biens)
    {
        $ary = [];

        foreach($biens as $bien) {
            $ary[] = $this->createBien($bien);
        }

        return $ary;
    }

    public function findAll()
    {
        return $this->createBiens($this->dbConnection->fetchAll('SELECT *, id_bien as id FROM bien WHERE prixdevente IS NOT NULL'));
    }

    public function findByCode($code)
    {
        $stmt = $this->dbConnection->prepare('SELECT *, id_bien as id FROM bien WHERE code = :code AND prixdevente IS NOT NULL');
        $stmt->bindValue('code', $code);
        $stmt->execute();

        $bien = $stmt->fetch();

        return $this->createBien($bien);
    }

    public function findByPrice($price)
    {
        $stmt = $this->dbConnection->prepare('SELECT *, id_bien as id FROM bien WHERE prixdevente = :price');
        $stmt->bindValue('price', $price);
        $stmt->execute();

        $biens = $stmt->fetchAll();

        return $this->createBiens($biens);
    }
    public function findByIntervalPrice($pricemin,$pricemax)
    {
        $stmt = $this->dbConnection->prepare('SELECT *, id_bien as id FROM bien WHERE prixdevente <= :pricemax and prixdevente >= :pricemin ');
        $stmt->bindValue('pricemin', $pricemin);
        $stmt->bindValue('pricemax', $pricemax);
        $stmt->execute();

        $biens = $stmt->fetchAll();

        return $this->createBiens($biens);
    }
}