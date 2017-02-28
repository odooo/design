<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeNomodele
 *
 * @ORM\Table(name="commande_nomodele")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\CommandeNomodeleRepository")
 */
class CommandeNomodele
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
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Commande", cascade={"persist", "remove"}, inversedBy="cmdNomodele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $commande;

    /**
     * @var \tontineBundle\Entity\Nomodele
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Nomodele", cascade={"persist", "remove"}, inversedBy="cmdNomodele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nomodele_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $nomodele;


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
     * @return CommandeNomodele
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
     * Set nomodele
     *
     * @param \tontineBundle\Entity\Nomodele $nomodele
     *
     * @return CommandeNomodele
     */
    public function setNomodele(\tontineBundle\Entity\Nomodele $nomodele = null)
    {
        $this->nomodele = $nomodele;

        return $this;
    }

    /**
     * Get nomodele
     *
     * @return \tontineBundle\Entity\Nomodele
     */
    public function getNomodele()
    {
        return $this->nomodele;
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
     * @return CommandeNomodele
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
