<?php

namespace tontineBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Code;

/**
 * OptionTontine
 *
 * @ORM\Table(name="option_tontine")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\OptionTontineRepository")
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 */
class OptionTontine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer",nullable=false)
     * La durée (Ans) de la tontine
     *  
     */
    private $duree;
    
    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float",nullable=false)
     *  
     */
    
    private $montant;

    /**
     * @var \tontineBundle\Entity\BienTontine
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\BienTontine", inversedBy="OptionTontine",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bien_tontine", referencedColumnName="id")
     * })
     */
    private $BienTontine;
    
    /**
     * @var \tontineBundle\Entity\TypeTontine
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\TypeTontine", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_tontine", referencedColumnName="id")
     * })
     */
    private $TypeTontine;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return OptionTontine
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }


    /**
     * Set Montant
     *
     * @param float $montant
     *
     * @return OptionTontine
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    
    /**
     * Set BienTontine
     *
     * @param \tontineBundle\Entity\BienTontine $BienTontine
     *
     * @return OptionTontine
     */
    public function setBienTontine(\tontineBundle\Entity\BienTontine $BienTontine = null)
    {
        $this->BienTontine = $BienTontine;

        return $this;
    }

    /**
     * Get BienTontine
     *
     * @return \tontineBundle\Entity\BienTontine
     */
    public function getBienTontine()
    {
        return $this->BienTontine;

    }


    /**
     * Set TypeTontine
     *
     * @param \tontineBundle\Entity\TypeTontine $TypeTontine
     *
     * @return OptionTontine
     */
    
    public function setTypeTontine(\tontineBundle\Entity\TypeTontine $TypeTontine = null)
    {
        $this->TypeTontine = $TypeTontine;

        return $this;
    }

    /**
     * Get TypeTontine
     *
     * @return \tontineBundle\Entity\TypeTontine
     */
    public function getTypeTontine()
    {
        return $this->TypeTontine;

    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return OptionTontine
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
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return OptionTontine
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return OptionTontine
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
     * Set updatedBy
     *
     * @param \tontineBundle\Entity\Agent $updatedBy
     *
     * @return OptionTontine
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

}
