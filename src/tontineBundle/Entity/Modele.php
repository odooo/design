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
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Pagnes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandeModele", mappedBy="modele")
     */
    private $cmdModele;
    

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
}
