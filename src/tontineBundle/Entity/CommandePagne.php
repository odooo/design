<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandePagne
 *
 * @ORM\Table(name="commande_pagne")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\CommandePagneRepository")
 */
class CommandePagne
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
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Commande", cascade={"persist", "remove"}, inversedBy="cmdPagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmd_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $commande;

    /**
     * @var \tontineBundle\Entity\Pagne
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Pagne", cascade={"persist", "remove"}, inversedBy="cmdPagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagne_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $pagne;

    /**
     * One Pagne has One FicheTravail.
     * @ORM\OneToOne(targetEntity="tontineBundle\Entity\FicheTravail", inversedBy="cmdPagne", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     */
    private $fiche;


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
     * @return CommandePagne
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
     * Set pagne
     *
     * @param \tontineBundle\Entity\Pagne $pagne
     *
     * @return CommandePagne
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

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getCommande()->getDesignation();
    }

    /**
     * Set fiche
     *
     * @param \tontineBundle\Entity\FicheTravail $fiche
     *
     * @return CommandePagne
     */
    public function setFiche(\tontineBundle\Entity\FicheTravail $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \tontineBundle\Entity\FicheTravail
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set hasFiche
     *
     * @param boolean $hasFiche
     *
     * @return CommandePagne
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
