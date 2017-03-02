<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Modele
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\ModeleRepository")
 */
class Modele
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     * 
     *  
     */
    
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     *  
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="frais", type="integer", nullable=true)
     *  
     */
    private $frais;

    /**
     * @var float
     *
     * @ORM\Column(name="mesure", type="float", nullable=true)
     *  
    */
    private $mesure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Pagnes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandeModele", mappedBy="modele")
     */
    private $cmdModele;

    /**
     * @var \tontineBundle\Entity\Pagne
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Pagne", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagne_id", referencedColumnName="id")
     * })
    * 
     * 
    * 
     */
    private $pagne;

    

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Modele
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->libelle;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cmdModele = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cmdModele
     *
     * @param \tontineBundle\Entity\CommandeModele $cmdModele
     *
     * @return Modele
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

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Modele
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set pagne
     *
     * @param \tontineBundle\Entity\Pagne $pagne
     *
     * @return Modele
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

    /**
     * Set mesure
     *
     * @param float $mesure
     *
     * @return Modele
     */
    public function setMesure($mesure)
    {
        $this->mesure = $mesure;

        return $this;
    }

    /**
     * Get mesure
     *
     * @return float
     */
    public function getMesure()
    {
        return $this->mesure;
    }

    /**
     * Set frais
     *
     * @param integer $frais
     *
     * @return Modele
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get frais
     *
     * @return integer
     */
    public function getFrais()
    {
        return $this->frais;
    }
}
