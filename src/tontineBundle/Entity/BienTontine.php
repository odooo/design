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
 * BienTontine
 *
 * @ORM\Table(name="bien_tontine")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\BienTontineRepository")
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 */
class BienTontine
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
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=255, nullable=true)
     * 
     *  
     */
    
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true) 
     *  
     */
    
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255, nullable=true) 
     *  
     */
    
    private $quartier;
    

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true) 
     *  
     */
    
    private $description;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_visite_1", type="datetime", nullable=true)
     */
    private $DateVisite1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_visite_2", type="datetime", nullable=true)
     */
    private $DateVisite2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_visite_3", type="datetime", nullable=true)
     */
    private $DateVisite3;

    /**
     * @var \tontineBundle\Entity\OptionTontine
     * @ORM\OneToMany(targetEntity="\tontineBundle\Entity\OptionTontine", mappedBy="BienTontine",cascade={"persist"})
     */
    private $OptionTontine;


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
    * 
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
   

    public function __construct() {
        $this->OptionTontine = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set zone
     *
     * @param string $zone
     *
     * @return BienTontine
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return BienTontine
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
     * Set quartier
     *
     * @param string $quartier
     *
     * @return BienTontine
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
     * Set description
     *
     * @param string $description
     *
     * @return BienTontine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set DateVisite1
     *
     * @param \DateTime
     *
     * @return BienTontine
     */
    public function setDateVisite1($DateVisite1)
    {
        $this->DateVisite1 = $DateVisite1;

        return $this;
    }

    /**
     * Get DateVisite1
     *
     * @return \DateTime
     */
    public function getDateVisite1()
    {
        return $this->DateVisite1;
    }


    /**
     * Set DateVisite2
     *
     * @param \DateTime
     *
     * @return BienTontine
     */
    public function setDateVisite2($DateVisite2)
    {
        $this->DateVisite2 = $DateVisite2;

        return $this;
    }

    /**
     * Get DateVisite2
     *
     * @return \DateTime
     */
    public function getDateVisite2()
    {
        return $this->DateVisite2;
    }

    /**
     * Set DateVisite3
     *
     * @param \DateTime
     *
     * @return BienTontine
     */
    public function setDateVisite3($DateVisite3)
    {
        $this->DateVisite3 = $DateVisite3;

        return $this;
    }

    /**
     * Get DateVisite3
     *
     * @return \DateTime
     */
    public function getDateVisite3()
    {
        return $this->DateVisite3;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return BienTontine
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
     * @return BienTontine
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
     * @return BienTontine
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
     * @return BienTontine
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
     * Add OptionTontine
     *
     * @param \tontineBundle\Entity\OptionTontine $option
     *
     * @return BienTontine
     */
    public function addOptionTontine(\tontineBundle\Entity\OptionTontine $option)
    {
        $this->OptionTontine[]= $option;

        return $this;
    }

    /**
     * Remove OptionTontine
     *
     * @param \tontineBundle\Entity\OptionTontine $option
     */
    public function removeOptionTontine(\tontineBundle\Entity\OptionTontine $option)
    {
        $this->OptionTontine->removeElement($option);
    }

    /**
     * Get OptionTontine
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOptionTontine()
    {
        return $this->OptionTontine;
    }
}
