<?php

namespace tontineBundle\Entity;

/**
 * Bien
 */
class Bien
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var [type]
     */
    private $price;

    /**
     * @var [type]
     */
    private $description;

    /**
     * Set id
     * 
     * @param integer $id 
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Bien
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * [setPrixDeVente description]
     */
    public function setPrixDeVente($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * [setPrixDeVente description]
     */
    public function setPrice($price)
    {
        return $this->setPrixDeVente($price);
    }

    /**
     * Get price
     * 
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param [type] $description [description]
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return [type] [description]
     */
    public function getDescription()
    {
        return $this->description;
    }
}
