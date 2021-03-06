<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeModele
 *
 * @ORM\Table(name="commande_modele")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\CommandeModeleRepository")
 */
class CommandeModele
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
     * @var boolean
     *
     * @ORM\Column(name="hasFiche", type="boolean", nullable=true)
     */
    private $hasFiche;

    /**
     * @var \tontineBundle\Entity\Commande
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Commande", cascade={"persist", "remove"}, inversedBy="cmdModele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $commande;

    /**
     * @var \tontineBundle\Entity\Modele
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Modele", cascade={"persist", "remove"}, inversedBy="cmdModele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modele_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $modele;


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
     * Set commande
     *
     * @param \tontineBundle\Entity\Commande $commande
     *
     * @return CommandeModele
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
     * Set modele
     *
     * @param \tontineBundle\Entity\Modele $modele
     *
     * @return CommandeModele
     */
    public function setModele(\tontineBundle\Entity\Modele $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \tontineBundle\Entity\Modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getCommande()->getDesignation();
    }

    /**
     * Set hasFiche
     *
     * @param boolean $hasFiche
     *
     * @return CommandeModele
     */
    public function setHasFiche($hasFiche)
    {
        $this->hasFiche = $hasFiche;

        return $this;
    }

    /**
     * Get hasFiche
     *
     * @return boolean
     */
    public function getHasFiche()
    {
        return $this->hasFiche;
    }
}
