<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * TransfertCommissions
 *@ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="transfert_commissions")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\TransfertCommissionsRepository")
 */
class TransfertCommissions
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
     * @ORM\Column(name="montant", type="string", length=255, nullable=true)
     * 
     * 
     */
    private $montant;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="date_transfert", type="datetime", nullable=true)
     */
    private $dateTransfert;

    /**
     * @var \tontineBundle\Entity\Piece
     *
     * @ORM\Column(name="piece", type="string", length=255)
     */
    private $piece;

    private $pieceFile;

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

    /**
     * @var \tontineBundle\Entity\TransfertFonds
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\TransfertFonds", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfertfonds_id", referencedColumnName="id")
     * })
     */
    
    
    private $transfertfonds;



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
     * @param string $montant
     *
     * @return TransfertCommissions
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set dateTransfert
     *
     * @param \DateTime $dateTransfert
     *
     * @return TransfertCommissions
     */
    public function setDateTransfert($dateTransfert)
    {
        $this->dateTransfert = $dateTransfert;

        return $this;
    }

    /**
     * Get dateTransfert
     *
     * @return \DateTime
     */
    public function getDateTransfert()
    {
        return $this->dateTransfert;
    }

    /**
     * Set piece
     *
     * @param \tontineBundle\Entity\Piece $piece
     *
     * @return TransfertFonds
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return string
     */
    public function getPiece()
    {
        return $this->piece;
    }

    public function setPieceFile(UploadedFile $file = null)
    {
        $this->pieceFile = $file;

        return $this;
    }

    public function getPieceFile()
    {
        return $this->pieceFile;
    }

    /**
     * Set agent
     *
     * @param \tontineBundle\Entity\Agent $agent
     *
     * @return TransfertCommissions
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
     * Set transfertfonds
     *
     * @param \tontineBundle\Entity\TransfertFonds $transfertfonds
     *
     * @return TransfertCommissions
     */
    public function setTransfertfonds(\tontineBundle\Entity\TransfertFonds $transfertfonds = null)
    {
        $this->transfertfonds = $transfertfonds;

        return $this;
    }

    /**
     * Get transfertfonds
     *
     * @return \tontineBundle\Entity\TransfertFonds
     */
    public function getTransfertfonds()
    {
        return $this->transfertfonds;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TransfertCommissions
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
     * @return TransfertCommissions
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
     * @return TransfertCommissions
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
     * @return TransfertCommissions
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
    public function agentTransfert()
    {
        return $this->createdBy->getPrenom() . ' ' . $this->createdBy->getNom();
    }
}
