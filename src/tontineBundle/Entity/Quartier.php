<?php

namespace tontineBundle\Entity;

/**
 * Quartier
 */
class Quartier
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

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
     * Set libelle
     *
     * @param string $code
     *
     * @return Quartier
     */
    public function setLibelle($libelle)
    {
        $this->libelle= $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

}
