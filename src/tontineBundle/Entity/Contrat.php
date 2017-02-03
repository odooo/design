<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Code;

/**
 * Contrat
 *@ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var string
     * 
     * @ORM\Column(name="code", type="string", length=100, nullable=true)
     */
    private $code;
    
   

    /**
     * @var string
     * @ORM\Column(name="code_bien", type="string", length=255, nullable=true)
     */
    private $codeBien;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \tontineBundle\Entity\Tontine
     
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Tontine", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tontine_id", referencedColumnName="id")
     * })
     * 
     */
    private $tontine;
    
    
    
      /**
     * @ORM\OneToOne(targetEntity="tontineBundle\Entity\Piece", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="piece_id", referencedColumnName="id")
     * })
     * 
     */
    private $piece;
    
    /**
     * @var \tontineBundle\Entity\Client
     
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     * 
     */
    private $client;

    
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
     * Set code
     *
     * @param string $code
     *
     * @return Contrat
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
     * Set codeBien
     *
     * @param string $codeBien
     *
     * @return Contrat
     */
    public function setCodeBien($codeBien)
    {
        $this->codeBien = $codeBien;

        return $this;
    }

    /**
     * Get codeBien
     *
     * @return string
     */
    public function getCodeBien()
    {
        return $this->codeBien;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Contrat
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
     * Set tontine
     *
     * @param \tontineBundle\Entity\Tontine $tontine
     *
     * @return Contrat
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
     * Set agent
     *
     * @param \tontineBundle\Entity\Agent $agent
     *
     * @return Contrat
     */
    public function setAgent(\tontineBundle\Entity\Agent $agent = null)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set piece
     *
     * @param \tontineBundle\Entity\Piece $piece
     *
     * @return Contrat
     */
    public function setPiece(\tontineBundle\Entity\Piece $piece = null)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return \tontineBundle\Entity\Piece
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Contrat
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
     * @return Contrat
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
     * @return Contrat
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
     * @return Contrat
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
        if($this->client){
        return $this->client->getPrenom() . ' ' . $this->client->getNom();}
        
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return Contrat
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
}
