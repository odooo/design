<?php

namespace tontineBundle\Entity;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepotMise
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="depot_mise")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\DepotMiseRepository")
 */
class DepotMise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collecteur_id", referencedColumnName="id")
     * })
     */
    private $collecteur;

    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="caissier_id", referencedColumnName="id")
     * })
     */
    private $caissier;

    /**
     * @var \tontineBundle\Entity\Client
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \tontineBundle\Entity\Tontine
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Tontine", inversedBy="mises", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tontine_id", referencedColumnName="id")
     * })
     */
    private $tontine;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;
    
 /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;
    
    
   /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="createdBy_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $createdBy;
    
   /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="updatedBy_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $updatedBy;

    public function __construct()
    {
        $this->date = new \DateTime();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return DepotMise
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DepotMise
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return DepotMise
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return DepotMise
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set collecteur
     *
     * @param \tontineBundle\Entity\Agent $collecteur
     *
     * @return DepotMise
     */
    public function setCollecteur(\tontineBundle\Entity\Agent $collecteur = null)
    {
        $this->collecteur = $collecteur;

        return $this;
    }

    /**
     * Get collecteur
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getCollecteur()
    {
        return $this->collecteur;
    }

    /**
     * Set caissier
     *
     * @param \tontineBundle\Entity\Agent $caissier
     *
     * @return DepotMise
     */
    public function setCaissier(\tontineBundle\Entity\Agent $caissier = null)
    {
        $this->caissier = $caissier;

        return $this;
    }

    /**
     * Get caissier
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getCaissier()
    {
        return $this->caissier;
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return DepotMise
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
     * Set tontine
     *
     * @param \tontineBundle\Entity\Tontine $tontine
     *
     * @return DepotMise
     */
    public function setTontine(\tontineBundle\Entity\Tontine $tontine = null)
    {
        $this->tontine = $tontine;

        return $this;
    }

    /**
     * Get tontine
     *
     * @return \tontineBundle\Entity\Tontine
     */
    public function getTontine()
    {
        return $this->tontine;
    }

    /**
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return DepotMise
     */
    public function setCreatedBy(\tontineBundle\Entity\Agent $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \tontineBundle\Entity\Agent $updatedBy
     *
     * @return DepotMise
     */
    public function setUpdatedBy(\tontineBundle\Entity\Agent $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
    
    /**
     * 
     * @return string
     */
    public function nomClient()
    {
        return $this->client->getPrenom() . ' ' . $this->client->getNom();
    }
    
    /**
     * 
     * @return string
     */
    public function nomCaissier()
    {
        return $this->caissier->getPrenom() . ' ' . $this->caissier->getNom();
    }

    /**
     * 
     * @return string
     */
    public function nomCollecteur()
    {
        return $this->collecteur->getPrenom() . ' ' . $this->collecteur->getNom();
    }
}
