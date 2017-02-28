<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Modele
 *
 * @ORM\Table(name="nomodele")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\NomodeleRepository")
 */
class Nomodele
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
     * @ORM\Column(name="prix_achat", type="integer", nullable=true)
     *  
    */
    private $prixAchat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Pagnes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandeNomodele", mappedBy="nomodele")
     */
    private $cmdNomodele;

    

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
     * @return Nomodele
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
        $this->cmdNomodele = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cmdNomodele
     *
     * @param \tontineBundle\Entity\CommandeNomodele $cmdNomodele
     *
     * @return Nomodele
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Nomodele
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
     * Set prixAchat
     *
     * @param integer $prixAchat
     *
     * @return Nomodele
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
}
