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
     * @ORM\Column(name="reference", type="text")
     */
    private $reference;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Modele.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandeModele", mappedBy="commande", cascade={"persist", "remove"})
     */
    private $cmdModele;

    protected $pagnes;

    protected $modeles;


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
}
