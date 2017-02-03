<?php

namespace tontineBundle\Entity;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;
use Doctrine\ORM\Mapping as ORM;

/**
 * ResiliationContrat
 *@ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Table(name="resiliation_contrat")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\ResiliationContratRepository")
 */
class ResiliationContrat
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
     * @ORM\Column(name="type_motif", type="string", length=100, nullable=true)
     */
    private $typeMotif;

    /**
     * @var string
     * @ORM\Column(name="type_resiliation", type="string", length=100, nullable=true)
     */
    private $typeResiliation;
    
    
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="validate", type="boolean",nullable=true,options={"default":false} )
     */
    private $validate;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_demande", type="datetime", nullable=true)
     */
    private $dateDemande;

    /**
     * @var string
     * @ORM\Column(name="details_motif", type="text", nullable=true)
     */
    private $detailsMotif;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_validation", type="datetime", nullable=true)
     */
    private $dateValidation;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_resiliation", type="datetime", nullable=true)
     */
    private $dateResiliation;

    /**
     * @var integer
     * 
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var string
     * @ORM\Column(name="observation", type="text", nullable=true)
     */
    private $observation;

    /**
     * @var \DateTime
     *
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
     *   @ORM\JoinColumn(name="agent_id", referencedColumnName="id")
     * })
     */
    private $agent;
    
    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agentValidant_id", referencedColumnName="id")
     * })
     */
    private $agentValidant;
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
     * @var \tontineBundle\Entity\Contrat
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Contrat", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contrat_id", referencedColumnName="id")
     * })
     */
    private $contrat;



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
     * Set typeMotif
     *
     * @param string $typeMotif
     *
     * @return ResiliationContrat
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
     * Set typeResiliation
     *
     * @param string $typeResiliation
     *
     * @return ResiliationContrat
     */
    public function setTypeResiliation($typeResiliation)
    {
        $this->typeResiliation = $typeResiliation;

        return $this;
    }

    /**
     * Get typeResiliation
     *
     * @return string
     */
    public function getTypeResiliation()
    {
        return $this->typeResiliation;
    }

    /**
     * Set dateDemande
     *
     * @param \DateTime $dateDemande
     *
     * @return ResiliationContrat
     */
    public function setDateDemande($dateDemande)
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    /**
     * Get dateDemande
     *
     * @return \DateTime
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }

    /**
     * Set detailsMotif
     *
     * @param string $detailsMotif
     *
     * @return ResiliationContrat
     */
    public function setDetailsMotif($detailsMotif)
    {
        $this->detailsMotif = $detailsMotif;

        return $this;
    }

    /**
     * Get detailsMotif
     *
     * @return string
     */
    public function getDetailsMotif()
    {
        return $this->detailsMotif;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     *
     * @return ResiliationContrat
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
     * Set dateResiliation
     *
     * @param \DateTime $dateResiliation
     *
     * @return ResiliationContrat
     */
    public function setDateResiliation($dateResiliation)
    {
        $this->dateResiliation = $dateResiliation;

        return $this;
    }

    /**
     * Get dateResiliation
     *
     * @return \DateTime
     */
    public function getDateResiliation()
    {
        return $this->dateResiliation;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return ResiliationContrat
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
     * Set observation
     *
     * @param string $observation
     *
     * @return ResiliationContrat
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ResiliationContrat
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
     * @return ResiliationContrat
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
     * @return ResiliationContrat
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
     * @return ResiliationContrat
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
     * Set contrat
     *
     * @param \tontineBundle\Entity\Contrat $contrat
     *
     * @return ResiliationContrat
     */
    public function setContrat(\tontineBundle\Entity\Contrat $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \tontineBundle\Entity\Contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set validate
     *
     * @param boolean $validate
     *
     * @return ResiliationContrat
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * Get validate
     *
     * @return boolean
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Set agent
     *
     * @param \tontineBundle\Entity\Agent $agent
     *
     * @return ResiliationContrat
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
     * Set agentValidant
     *
     * @param \tontineBundle\Entity\Agent $agentValidant
     *
     * @return ResiliationContrat
     */
    public function setAgentValidant(\tontineBundle\Entity\Agent $agentValidant = null)
    {
        $this->agentValidant = $agentValidant;

        return $this;
    }

    /**
     * Get agentValidant
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getAgentValidant()
    {
        return $this->agentValidant;
    }
}
