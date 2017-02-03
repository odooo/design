<?php

namespace tontineBundle\Entity;

class CriteresEtat
{

    private $client;
    
    private $periode;
    
    private $ville;

    private $quartier;

    private $typeMise;

    private $typeMotif;


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
     * Set ville
     *
     * @param string $ville
     *
     * @return CriteresEtat
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set quartier
     *
     * @param string $quartier
     *
     * @return CriteresEtat
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get quartier
     *
     * @return string
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set typeMise
     *
     * @param string $typeMise
     *
     * @return CriteresEtat
     */
    public function setTypeMise($typeMise)
    {
        $this->typeMise = $typeMise;

        return $this;
    }

    /**
     * Get typeMise
     *
     * @return string
     */
    public function getTypeMise()
    {
        return $this->typeMise;
    }

    /**
     * Set typeMotif
     *
     * @param string $typeMotif
     *
     * @return CriteresEtat
     */
    public function setTypeMotif($typeMotif)
    {
        $this->typeMotif = $typeMotif;

        return $this;
    }

    /**
     * Get typeMotif
     *
     * @return string
     */
    public function getTypeMotif()
    {
        return $this->typeMotif;
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return CriteresEtat
     */
    public function setClient(\tontineBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \tontineBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set periode
     *
     * @param \tontineBundle\Entity\Periode $periode
     *
     * @return CriteresEtat
     */
    public function setPeriode(\tontineBundle\Entity\Periode $periode = null)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \tontineBundle\Entity\Periode
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
