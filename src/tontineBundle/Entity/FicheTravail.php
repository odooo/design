<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * FicheTravail
 *
 * @ORM\Table(name="fiche_travail")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\FicheTravailRepository")
 */
class FicheTravail
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
     * @ORM\Column(name="dateCommande", type="datetime", nullable=true)
     */
    private $dateCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="text", nullable=true)
     */
    private $designation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraison", type="datetime", nullable=true)
     */
    private $dateLivraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="mesure", type="integer", nullable=true)
     */
    private $mesure;

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
     * @var \tontineBundle\Entity\Commande
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Commande", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commande_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $commande;

    /**
     * @var \tontineBundle\Entity\Pagne
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Pagne", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagne_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $pagne;

    /*
    *
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="tontineBundle\Entity\CommandePagne", mappedBy="fiche")
     */

    private $cmdPagne;

    /**
     * @var string
     * @ORM\Column(name="long_gh_chemise", type="string", length=255, nullable=true)
     */
    private $longGHChemise;

    /**
     * @var string
     *
     * @ORM\Column(name="long_gh_pantalon", type="string", length=255, nullable=true)
     */
    private $longGHPantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="dos_chemise", type="string", length=255, nullable=true)
     */
    private $dosChemise;

    /**
     * @var string
     *
     * @ORM\Column(name="dos_pantalon", type="string", length=255, nullable=true)
     */
    private $dosPantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="poitrine_chemise", type="string", length=255, nullable=true)
     */
    private $poitrineChemise;

    /**
     * @var string
     *
     * @ORM\Column(name="poitrine_pantalon", type="string", length=255, nullable=true)
     */
    private $poitrinePantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="taille_chemise", type="string", length=255, nullable=true)
     */
    private $tailleChemise;

     /**
     * @var string
     *
     * @ORM\Column(name="taille_pantalon", type="string", length=255, nullable=true)
     */
    private $taillePantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="hanche_chemise", type="string", length=255, nullable=true)
     */
    private $hancheChemise;

     /**
     * @var string
     *
     * @ORM\Column(name="hanche_pantalon", type="string", length=255, nullable=true)
     */
    private $hanchePantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="tmanche_chemise", type="string", length=255, nullable=true)
     */
    private $tmancheChemise;

     /**
     * @var string
     *
     * @ORM\Column(name="tmanche_pantalon", type="string", length=255, nullable=true)
     */
    private $tmanchePantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="col_chemise", type="string", length=255, nullable=true)
     */
    private $colChemise;

     /**
     * @var string
     *
     * @ORM\Column(name="col_pantalon", type="string", length=255, nullable=true)
     */
    private $colPantalon;

    /**
     * @var string
     *
     * @ORM\Column(name="poignet_chemise", type="string", length=255, nullable=true)
     */
    private $poignetChemise;

     /**
     * @var string
     *
     * @ORM\Column(name="poignet_pantalon", type="string", length=255, nullable=true)
     */
    private $poignetPantalon; 

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;



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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return FicheTravail
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return FicheTravail
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

    /**
    *
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return FicheTravail
     */
    public function setCreatedBy(\tontineBundle\Entity\Agent $createdBy = null)
    {
        $this->createdBy = $createdBy;
    }

    /**
    *
     * Set cmdPagne
     *
     * @param \tontineBundle\Entity\CommandePagne $cmdPagne
     *
     * @return FicheTravail
     */
    public function setCmdPagne(\tontineBundle\Entity\CommandePagne $cmdPagne = null)
    {
        $this->cmdPagne = $cmdPagne;

        return $this;
    }

    /**
    *
     * Get createdBy
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
    *
     * Get cmdPagne
     *
     * @return \tontineBundle\Entity\CommandePagne
     */
    public function getCmdPagne()
    {
        return $this->cmdPagne;
    }

    /**
     * Set commande
     *
     * @param \tontineBundle\Entity\Commande $commande
     *
     * @return FicheTravail
     */
    public function setCommande(\tontineBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \tontineBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set mesure
     *
     * @param integer $mesure
     *
     * @return FicheTravail
     */
    public function setMesure($mesure)
    {
        $this->mesure = $mesure;

        return $this;
    }

    /**
     * Get mesure
     *
     * @return integer
     */
    public function getMesure()
    {
        return $this->mesure;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return FicheTravail
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
     * Set montant
     *
     * @param integer $montant
     *
     * @return FicheTravail
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
     * Set longGHChemise
     *
     * @param string $longGHChemise
     *
     * @return FicheTravail
     */
    public function setLongGHChemise($longGHChemise)
    {
        $this->longGHChemise = $longGHChemise;

        return $this;
    }

    /**
     * Get longGHChemise
     *
     * @return string
     */
    public function getLongGHChemise()
    {
        return $this->longGHChemise;
    }

    /**
     * Set dosChemise
     *
     * @param string $dosChemise
     *
     * @return FicheTravail
     */
    public function setDosChemise($dosChemise)
    {
        $this->dosChemise = $dosChemise;

        return $this;
    }

    /**
     * Get dosChemise
     *
     * @return string
     */
    public function getDosChemise()
    {
        return $this->dosChemise;
    }

    /**
     * Set dosPantalon
     *
     * @param string $dosPantalon
     *
     * @return FicheTravail
     */
    public function setDosPantalon($dosPantalon)
    {
        $this->dosPantalon = $dosPantalon;

        return $this;
    }

    /**
     * Get dosPantalon
     *
     * @return string
     */
    public function getDosPantalon()
    {
        return $this->dosPantalon;
    }

    /**
     * Set poitrineChemise
     *
     * @param string $poitrineChemise
     *
     * @return FicheTravail
     */
    public function setPoitrineChemise($poitrineChemise)
    {
        $this->poitrineChemise = $poitrineChemise;

        return $this;
    }

    /**
     * Get poitrineChemise
     *
     * @return string
     */
    public function getPoitrineChemise()
    {
        return $this->poitrineChemise;
    }

    /**
     * Set poitrinePantalon
     *
     * @param string $poitrinePantalon
     *
     * @return FicheTravail
     */
    public function setPoitrinePantalon($poitrinePantalon)
    {
        $this->poitrinePantalon = $poitrinePantalon;

        return $this;
    }

    /**
     * Get poitrinePantalon
     *
     * @return string
     */
    public function getPoitrinePantalon()
    {
        return $this->poitrinePantalon;
    }

    /**
     * Set tailleChemise
     *
     * @param string $tailleChemise
     *
     * @return FicheTravail
     */
    public function setTailleChemise($tailleChemise)
    {
        $this->tailleChemise = $tailleChemise;

        return $this;
    }

    /**
     * Get tailleChemise
     *
     * @return string
     */
    public function getTailleChemise()
    {
        return $this->tailleChemise;
    }

    /**
     * Set taillePantalon
     *
     * @param string $taillePantalon
     *
     * @return FicheTravail
     */
    public function setTaillePantalon($taillePantalon)
    {
        $this->taillePantalon = $taillePantalon;

        return $this;
    }

    /**
     * Get taillePantalon
     *
     * @return string
     */
    public function getTaillePantalon()
    {
        return $this->taillePantalon;
    }

    /**
     * Set hancheChemise
     *
     * @param string $hancheChemise
     *
     * @return FicheTravail
     */
    public function setHancheChemise($hancheChemise)
    {
        $this->hancheChemise = $hancheChemise;

        return $this;
    }

    /**
     * Get hancheChemise
     *
     * @return string
     */
    public function getHancheChemise()
    {
        return $this->hancheChemise;
    }

    /**
     * Set hanchePantalon
     *
     * @param string $hanchePantalon
     *
     * @return FicheTravail
     */
    public function setHanchePantalon($hanchePantalon)
    {
        $this->hanchePantalon = $hanchePantalon;

        return $this;
    }

    /**
     * Get hanchePantalon
     *
     * @return string
     */
    public function getHanchePantalon()
    {
        return $this->hanchePantalon;
    }

    /**
     * Set tmancheChemise
     *
     * @param string $tmancheChemise
     *
     * @return FicheTravail
     */
    public function setTmancheChemise($tmancheChemise)
    {
        $this->tmancheChemise = $tmancheChemise;

        return $this;
    }

    /**
     * Get tmancheChemise
     *
     * @return string
     */
    public function getTmancheChemise()
    {
        return $this->tmancheChemise;
    }

    /**
     * Set tmanchePantalon
     *
     * @param string $tmanchePantalon
     *
     * @return FicheTravail
     */
    public function setTmanchePantalon($tmanchePantalon)
    {
        $this->tmanchePantalon = $tmanchePantalon;

        return $this;
    }

    /**
     * Get tmanchePantalon
     *
     * @return string
     */
    public function getTmanchePantalon()
    {
        return $this->tmanchePantalon;
    }

    /**
     * Set colChemise
     *
     * @param string $colChemise
     *
     * @return FicheTravail
     */
    public function setColChemise($colChemise)
    {
        $this->colChemise = $colChemise;

        return $this;
    }

    /**
     * Get colChemise
     *
     * @return string
     */
    public function getColChemise()
    {
        return $this->colChemise;
    }

    /**
     * Set colPantalon
     *
     * @param string $colPantalon
     *
     * @return FicheTravail
     */
    public function setColPantalon($colPantalon)
    {
        $this->colPantalon = $colPantalon;

        return $this;
    }

    /**
     * Get colPantalon
     *
     * @return string
     */
    public function getColPantalon()
    {
        return $this->colPantalon;
    }

    /**
     * Set poignetChemise
     *
     * @param string $poignetChemise
     *
     * @return FicheTravail
     */
    public function setPoignetChemise($poignetChemise)
    {
        $this->poignetChemise = $poignetChemise;

        return $this;
    }

    /**
     * Get poignetChemise
     *
     * @return string
     */
    public function getPoignetChemise()
    {
        return $this->poignetChemise;
    }

    /**
     * Set poignetPantalon
     *
     * @param string $poignetPantalon
     *
     * @return FicheTravail
     */
    public function setPoignetPantalon($poignetPantalon)
    {
        $this->poignetPantalon = $poignetPantalon;

        return $this;
    }

    /**
     * Get poignetPantalon
     *
     * @return string
     */
    public function getPoignetPantalon()
    {
        return $this->poignetPantalon;
    }

    /**
     * Set longGHPantalon
     *
     * @param string $longGHPantalon
     *
     * @return FicheTravail
     */
    public function setLongGHPantalon($longGHPantalon)
    {
        $this->longGHPantalon = $longGHPantalon;

        return $this;
    }

    /**
     * Get longGHPantalon
     *
     * @return string
     */
    public function getLongGHPantalon()
    {
        return $this->longGHPantalon;
    }

    /**
     * Set pagne
     *
     * @param \tontineBundle\Entity\Pagne $pagne
     *
     * @return FicheTravail
     */
    public function setPagne(\tontineBundle\Entity\Pagne $pagne = null)
    {
        $this->pagne = $pagne;

        return $this;
    }

    /**
     * Get pagne
     *
     * @return \tontineBundle\Entity\Pagne
     */
    public function getPagne()
    {
        return $this->pagne;
    }
}
