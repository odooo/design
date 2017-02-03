<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Visite
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="visite")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\VisiteRepository")
 * 
 */
class Visite
{
    const NEW_VISITE = 0;
    const VALIDATED_VISITE = 1;
    const DONE_VISITE = 2;
    const IGNORED_VISITE = 3;

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
     * @ORM\Column(name="date_disponibilite", type="datetime", nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * 
     */
    private $dateDisponibilite;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", options={"default"=0})
     */
    private $etat;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="choixDate", type="integer", options={"default"=0})
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     */
    private $choixDate;

    /**
     * @var string
     *
     * @ORM\Column(name="moyen_deplacement", type="string", length=100, nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     * 
     *  
     */
    private $moyenDeplacement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation", type="datetime", nullable=true)
     */
    private $dateValidation;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAbandon", type="datetime", nullable=true)
     */
    private $dateAbandon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_effective", type="datetime", nullable=true)
     */
    private $dateEffective;

    /**
     * @var \tontineBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Client", inversedBy="visites", cascade={"persist"})
     * 
     *  
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\BienTontine")
     * 
     * @Assert\NotNull(message="invalide")
     */
    private $bien;

    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_id", referencedColumnName="id")
     * })
     */
    private $responsable;
    
    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     */
    private $closeBy;

    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agent_id", referencedColumnName="id")
     * })
     */
    private $agent;
    
    
    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     */
    private $abandonnant;
    
    
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
     * Set dateDisponibilite
     *
     * @param \DateTime $dateDisponibilite
     *
     * @return Visite
     */
    public function setDateDisponibilite($dateDisponibilite)
    {
        $this->dateDisponibilite = $dateDisponibilite;

        return $this;
    }

    /**
     * Get dateDisponibilite
     *
     * @return \DateTime
     */
    public function getDateDisponibilite()
    {
        return $this->dateDisponibilite;
    }

    /**
     * Set moyenDeplacement
     *
     * @param string $moyenDeplacement
     *
     * @return Visite
     */
    public function setMoyenDeplacement($moyenDeplacement)
    {
        $this->moyenDeplacement = $moyenDeplacement;

        return $this;
    }

    /**
     * Get moyenDeplacement
     *
     * @return string
     */
    public function getMoyenDeplacement()
    {
        return $this->moyenDeplacement;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     *
     * @return Visite
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get dateValidation
     *
     * @return \DateTime
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set dateEffective
     *
     * @param \DateTime $dateEffective
     *
     * @return Visite
     */
    public function setDateEffective($dateEffective)
    {
        $this->dateEffective = $dateEffective;

        return $this;
    }

    /**
     * Get dateEffective
     *
     * @return \DateTime
     */
    public function getDateEffective()
    {
        return $this->dateEffective;
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return Visite
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
     * Set responsable
     *
     * @param \tontineBundle\Entity\Agent $responsable
     *
     * @return Visite
     */
    public function setResponsable(\tontineBundle\Entity\Agent $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set agent
     *
     * @param \tontineBundle\Entity\Agent $agent
     *
     * @return Visite
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Visite
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
     * @return Visite
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
     * @return Visite
     */
    public function setCreatedBy(\tontineBundle\Entity\Agent $createdBy = null)
    {
        $this->createdBy = $createdBy;
        $this->agent = $createdBy;

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
     * @return Visite
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
     * Set etat
     *
     * @param integer $etat
     *
     * @return Visite
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set abandonnant
     *
     * @param \tontineBundle\Entity\Agent $abandonnant
     *
     * @return Visite
     */
    public function setAbandonnant(\tontineBundle\Entity\Agent $abandonnant = null)
    {
        $this->abandonnant = $abandonnant;

        return $this;
    }

    /**
     * Get abandonnant
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getAbandonnant()
    {
        return $this->abandonnant;
    }

    /**
     * Set dateAbandon
     *
     * @param \DateTime $dateAbandon
     *
     * @return Visite
     */
    public function setDateAbandon($dateAbandon)
    {
        $this->dateAbandon = $dateAbandon;

        return $this;
    }

    /**
     * Get dateAbandon
     *
     * @return \DateTime
     */
    public function getDateAbandon()
    {
        return $this->dateAbandon;
    }

    /**
     * Set closeBy
     *
     * @param \tontineBundle\Entity\Agent $closeBy
     *
     * @return Visite
     */
    public function setCloseBy(\tontineBundle\Entity\Agent $closeBy = null)
    {
        $this->closeBy = $closeBy;

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
     * Set bien
     *
     * @param \tontineBundle\Entity\BienTontine $bien
     *
     * @return Visite
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
     * Get closeBy
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getCloseBy()
    {
        return $this->closeBy;
    }

    /**
     * Set choixDate
     *
     * @param integer $choixDate
     *
     * @return Visite
     */
    public function setChoixDate($choixDate)
    {
        $this->choixDate = $choixDate;

        return $this;
    }

    /**
     * Get choixDate
     *
     * @return integer
     */
    public function getChoixDate()
    {
        return $this->choixDate;
    }
}
