<?php

namespace tontineBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;

/**
 * Tontine
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="tontine")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\TontineRepository")
 */
class Tontine
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
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", options={"default"=0})
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_mise", type="integer", options={"default"=0})
     */
    private $nbMise;

    /**
     * @var integer
     *
     * @ORM\Column(name="cumul_provision", type="integer", nullable=true)
     */
    private $cumulProvision;
    
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
     *   @ORM\JoinColumn(name="createdBy_id", referencedColumnName="id")
     * })
     */
    private $createdBy;
    
   /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="updatedBy_id", referencedColumnName="id")
     * })
     */
    private $updatedBy;
    
    /**
     * @var \tontineBundle\Entity\Client
     * @ORM\ManyToOne(targetEntity="\tontineBundle\Entity\Client", inversedBy="tontines",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\BienTontine")     
     */
    private $bien;

    /**
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\DepotMise", mappedBy="tontine")
     */
    private $mises;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\TypeTontine")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mode;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agency")     
     */
    private $agence;
    
    public function __construct() {
        $this->duree = 0;
        $this->nbMise = 0;
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
     * @return \tontineBundle\Entity\Tontine
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
     * Set duree
     *
     * @param string $duree
     *
     * @return \tontineBundle\Entity\Tontine
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set cumulProvision
     *
     * @param integer $cumulProvision
     *
     * @return \tontineBundle\Entity\Tontine
     */
    public function setCumulProvision($cumulProvision)
    {
        $this->cumulProvision = $cumulProvision;

        return $this;
    }

    /**
     * Get cumulProvision
     *
     * @return integer
     */
    public function getCumulProvision()
    {
        return $this->cumulProvision;
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return \tontineBundle\Entity\Tontine
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
     * Set agence
     *
     * @param \tontineBundle\Entity\Agency $agence
     *
     * @return Tontine
     */
    public function setAgence(\tontineBundle\Entity\Agency $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \tontineBundle\Entity\Agency
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return \tontineBundle\Entity\Tontine
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
     * @return Tontine
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
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return Tontine
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
     * @return Tontine
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
     * Add mise
     *
     * @param \tontineBundle\Entity\DepotMise $mise
     *
     * @return Tontine
     */
    public function addMise(\tontineBundle\Entity\DepotMise $mise)
    {
        $this->mises[] = $mise;

        return $this;
    }

    /**
     * Remove mise
     *
     * @param \tontineBundle\Entity\DepotMise $mise
     */
    public function removeMise(\tontineBundle\Entity\DepotMise $mise)
    {
        $this->mises->removeElement($mise);
    }

    /**
     * Get mises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMises()
    {
        return $this->mises;
    }

    /**
     * Set mode
     *
     * @param \tontineBundle\Entity\TypeTontine $mode
     *
     * @return Tontine
     */
    public function setMode(\tontineBundle\Entity\TypeTontine $mode = null)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return \tontineBundle\Entity\TypeTontine
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set bien
     *
     * @param \tontineBundle\Entity\BienTontine $bien
     *
     * @return \tontineBundle\Entity\Tontine
     */
    public function setBien(\tontineBundle\Entity\BienTontine $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \tontineBundle\Entity\BienTontine
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set nbMise
     *
     * @param integer $nbMise
     *
     * @return Tontine
     */
    public function setNbMise($nbMise)
    {
        $this->nbMise = $nbMise;

        return $this;
    }

    /**
     * Get nbMise
     *
     * @return integer
     */
    public function getNbMise()
    {
        return $this->nbMise;
    }
}
