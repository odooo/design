<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Code;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * ConditionGenerale
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="condition_generale")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\ConditionGeneraleRepository")
 */
class ConditionGenerale
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_signature", type="datetime", nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     */
    private $dateSignature;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="integer", nullable=true) 
     *  
     */
    private $version;

   /**
     * @var \tontineBundle\Entity\Piece
     *
     * @ORM\ManyToMany(targetEntity="tontineBundle\Entity\Piece", cascade={"persist"})
     * @ORM\JoinTable(name="condition_pieces",
     *      joinColumns={
     *          @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *      },
     *      inverseJoinColumns={
     *           @ORM\JoinColumn(name="pieces_id", referencedColumnName="id", unique=true)
     *      }
     * )
     */
    private $pieces;

    /**
     * @var \tontineBundle\Entity\Client
     *
     * @ORM\OneToOne(targetEntity="tontineBundle\Entity\Client", mappedBy="condition", cascade={"persist"})
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
     * Set dateSignature
     *
     * @param \DateTime $dateSignature
     *
     * @return ConditionGenerale
     */
    public function setDateSignature($dateSignature)
    {
        $this->dateSignature = $dateSignature;

        return $this;
    }

    /**
     * Get dateSignature
     *
     * @return \DateTime
     */
    public function getDateSignature()
    {
        return $this->dateSignature;
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return ConditionGenerale
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ConditionGenerale
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
     * @return ConditionGenerale
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
     * @return ConditionGenerale
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
     * @return ConditionGenerale
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
     * Constructor
     */
    public function __construct()
    {
        $this->pieces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add piece
     *
     * @param \tontineBundle\Entity\Piece $piece
     *
     * @return ConditionGenerale
     */
    public function addPiece(\tontineBundle\Entity\Piece $piece)
    {
        $this->pieces[] = $piece;

        return $this;
    }

    /**
     * Remove piece
     *
     * @param \tontineBundle\Entity\Piece $piece
     */
    public function removePiece(\tontineBundle\Entity\Piece $piece)
    {
        $this->pieces->removeElement($piece);
    }

    /**
     * Get pieces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPieces()
    {
        return $this->pieces;
    }
    
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }

    /**
     * Set version
     *
     * @param integer $version
     *
     * @return ConditionGenerale
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }
}
