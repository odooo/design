<?php

namespace tontineBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use AjaxifySearch\Annotation\AjaxifySearch;
use \Symfony\Component\HttpFoundation\File\File;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\CommandeRepository")
 */

// status = 1 => Avance payée par le client et commande en cours
// status = 3 => commande finalisée

class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="text")
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_commande", type="string", length=255)
     */
    private $typeCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrePagne", type="integer", nullable=true)
     */
    private $nbrePagne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreModele", type="integer", nullable=true)
     */
    private $nbreModele;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreNomodele", type="integer", nullable=true)
     */
    private $nbreNomodele;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="benefice", type="integer", nullable=true)
     */
    private $benefice;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_achat", type="integer", nullable=true)
     */
    private $prixAchat;

    /**
     * @var integer
     *
     * @ORM\Column(name="reste_a_payer", type="integer", nullable=true)
     */
    private $reteAPayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="avance", type="integer", nullable=true)
     */
    private $avance;

    /**
     * @var integer
     *
     * @ORM\Column(name="relicat", type="integer", nullable=true)
     */
    private $relicat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_paid_avance", type="datetime", nullable=true)
     */
    private $datePaidAvance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="datetime", nullable=true)
     */
    private $dateLivraison;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasBill", type="boolean", nullable=true)
     */
    private $hasBill;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"}, inversedBy="createdCommande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="createdBy_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \tontineBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Client", cascade={"persist", "remove"}, inversedBy="commandes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cli_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $client;


    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * One Commande can contain Many Pagnes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandePagne", mappedBy="commande", cascade={"persist", "remove"})
     */
    private $cmdPagne;

    /**
     *
     * One Commande has One Bill.
     * @ORM\OneToOne(targetEntity="tontineBundle\Entity\Facture", mappedBy="commande")
     */

    private $facture;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Modele.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandeModele", mappedBy="commande", cascade={"persist", "remove"})
     */
    private $cmdModele;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Nomodele.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandeNomodele", mappedBy="commande", cascade={"persist", "remove"})
     */
    private $cmdNomodele;

    protected $pagnes;

    protected $modeles;

    protected $nomodeles;


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
     * Set reference
     *
     * @param string $reference
     *
     * @return Commande
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Commande
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return Commande
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
     * Constructor
     */
    public function __construct()
    {
        $this->cmdPagne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cmdModele = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pagnes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modeles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set client
     *
     * @param \tontineBundle\Entity\Client $client
     *
     * @return Commande
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
     * Set typeCommande
     *
     * @param string $typeCommande
     *
     * @return Commande
     */
    public function setTypeCommande($typeCommande)
    {
        $this->typeCommande = $typeCommande;

        return $this;
    }

    /**
     * Get typeCommande
     *
     * @return string
     */
    public function getTypeCommande()
    {
        return $this->typeCommande;
    }

    /**
     * Add cmdPagne
     *
     * @param \tontineBundle\Entity\CommandePagne $cmdPagne
     *
     * @return Commande
     */
    public function addCmdPagne(\tontineBundle\Entity\CommandePagne $cmdPagne)
    {
        $this->cmdPagne[] = $cmdPagne;

        return $this;
    }

    /**
     * Remove cmdPagne
     *
     * @param \tontineBundle\Entity\CommandePagne $cmdPagne
     */
    public function removeCmdPagne(\tontineBundle\Entity\CommandePagne $cmdPagne)
    {
        $this->cmdPagne->removeElement($cmdPagne);
    }

    /**
     * Get cmdPagne
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmdPagne()
    {
        return $this->cmdPagne;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->reference;
    }

    // Important
    public function getPagne()
    {
        $pagnes = new ArrayCollection();

        foreach($this->cmdPagne as $p)
        {
            $this->pagnes[] = $p->getPagne();
        }

        return $this->pagnes;
    }
    // Important
    public function setPagne($pagnes)
    {

    }

    /**
     * Add cmdModele
     *
     * @param \tontineBundle\Entity\CommandeModele $cmdModele
     *
     * @return Commande
     */
    public function addCmdModele(\tontineBundle\Entity\CommandeModele $cmdModele)
    {
        $this->cmdModele[] = $cmdModele;

        return $this;
    }

    /**
     * Remove cmdModele
     *
     * @param \tontineBundle\Entity\CommandeModele $cmdModele
     */
    public function removeCmdModele(\tontineBundle\Entity\CommandeModele $cmdModele)
    {
        $this->cmdModele->removeElement($cmdModele);
    }

    /**
     * Get cmdModele
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmdModele()
    {
        return $this->cmdModele;
    }

    public function getModele()
    {
        $modeles = new ArrayCollection();

        if(!empty($this->cmdModele))
        {
            foreach($this->cmdModele as $c)
            {
                $this->modeles[] = $c->getModele();
            }
        }

        return $this->modeles;
    }
    
    // Important
    public function setModele($modeles)
    {

    }

    public function getNomodele()
    {
        $nomodeles = new ArrayCollection();

        if(!empty($this->cmdNomodele))
        {
            foreach($this->cmdNomodele as $c)
            {
                $this->nomodeles[] = $c->getNomodele();
            }
        }

        return $this->nomodeles;
    }
    // Important
    public function setNomodele($nomodeles)
    {

    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Commande
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
     * Set nbrePagne
     *
     * @param integer $nbrePagne
     *
     * @return Commande
     */
    public function setNbrePagne($nbrePagne)
    {
        $this->nbrePagne = $nbrePagne;

        return $this;
    }

    /**
     * Get nbrePagne
     *
     * @return integer
     */
    public function getNbrePagne()
    {
        return $this->nbrePagne;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Commande
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
     * Set hasBill
     *
     * @param boolean $hasBill
     *
     * @return Commande
     */
    public function setHasBill($hasBill)
    {
        $this->hasBill = $hasBill;

        return $this;
    }

    /**
     * Get hasBill
     *
     * @return boolean
     */
    public function getHasBill()
    {
        return $this->hasBill;
    }

    /**
     * Set facture
     *
     * @param \tontineBundle\Entity\Facture $facture
     *
     * @return Commande
     */
    public function setFacture(\tontineBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \tontineBundle\Entity\Facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set avance
     *
     * @param integer $avance
     *
     * @return Commande
     */
    public function setAvance($avance)
    {
        $this->avance = $avance;

        return $this;
    }

    /**
     * Get avance
     *
     * @return integer
     */
    public function getAvance()
    {
        return $this->avance;
    }

    /**
     * Set datePaidAvance
     *
     * @param \DateTime $datePaidAvance
     *
     * @return Commande
     */
    public function setDatePaidAvance($datePaidAvance)
    {
        $this->datePaidAvance = $datePaidAvance;

        return $this;
    }

    /**
     * Get datePaidAvance
     *
     * @return \DateTime
     */
    public function getDatePaidAvance()
    {
        return $this->datePaidAvance;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Commande
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set reteAPayer
     *
     * @param integer $reteAPayer
     *
     * @return Commande
     */
    public function setReteAPayer($reteAPayer)
    {
        $this->reteAPayer = $reteAPayer;

        return $this;
    }

    /**
     * Get reteAPayer
     *
     * @return integer
     */
    public function getReteAPayer()
    {
        return $this->reteAPayer;
    }

    /**
     * Set relicat
     *
     * @param integer $relicat
     *
     * @return Commande
     */
    public function setRelicat($relicat)
    {
        $this->relicat = $relicat;

        return $this;
    }

    /**
     * Get relicat
     *
     * @return integer
     */
    public function getRelicat()
    {
        return $this->relicat;
    }

    /**
     * Set prixAchat
     *
     * @param integer $prixAchat
     *
     * @return Commande
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return integer
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set nbreModele
     *
     * @param integer $nbreModele
     *
     * @return Commande
     */
    public function setNbreModele($nbreModele)
    {
        $this->nbreModele = $nbreModele;

        return $this;
    }

    /**
     * Get nbreModele
     *
     * @return integer
     */
    public function getNbreModele()
    {
        return $this->nbreModele;
    }

    /**
     * Set benefice
     *
     * @param integer $benefice
     *
     * @return Commande
     */
    public function setBenefice($benefice)
    {
        $this->benefice = $benefice;

        return $this;
    }

    /**
     * Get benefice
     *
     * @return integer
     */
    public function getBenefice()
    {
        return $this->benefice;
    }

    /**
     * Set nbreNomodele
     *
     * @param integer $nbreNomodele
     *
     * @return Commande
     */
    public function setNbreNomodele($nbreNomodele)
    {
        $this->nbreNomodele = $nbreNomodele;

        return $this;
    }

    /**
     * Get nbreNomodele
     *
     * @return integer
     */
    public function getNbreNomodele()
    {
        return $this->nbreNomodele;
    }

    /**
     * Add cmdNomodele
     *
     * @param \tontineBundle\Entity\CommandeNomodele $cmdNomodele
     *
     * @return Commande
     */
    public function addCmdNomodele(\tontineBundle\Entity\CommandeNomodele $cmdNomodele)
    {
        $this->cmdNomodele[] = $cmdNomodele;

        return $this;
    }

    /**
     * Remove cmdNomodele
     *
     * @param \tontineBundle\Entity\CommandeNomodele $cmdNomodele
     */
    public function removeCmdNomodele(\tontineBundle\Entity\CommandeNomodele $cmdNomodele)
    {
        $this->cmdNomodele->removeElement($cmdNomodele);
    }

    /**
     * Get cmdNomodele
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmdNomodele()
    {
        return $this->cmdNomodele;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return Commande
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }
}
