<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AjaxifySearch\Annotation\AjaxifySearch;
use \Symfony\Component\HttpFoundation\File\File;

/**
 * Pagne
 *
 * @ORM\Table(name="pagne")
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\PagneRepository")
 *
 * @AjaxifySearch(
 *     alias = "pagne",
 *     itemTemplate = "tontineBundle:Pagne:partials/item.html.twig",
 *     searchables = {"reference", "designation", "prix", "categorie"},
 *     orderBy = { "id": "DESC" }
 * )
 *
 */
class Pagne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=100, nullable=true)
     *
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=100, nullable=true)
     *
     */
    private $designation;

    /**
     * @var float
     *
     * @ORM\Column(name="mesure", type="float", nullable=true)
     */
    private $mesure;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var string
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     *
     * @var \Symfony\Component\HttpFoundation\File\File
     */
    public $filePhoto;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agency")
     *
     * @Assert\NotBlank(message="Vous devez renseigner l'agence de l'agent")
     */
    protected $agence;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Categorie")
     *
     */
    protected $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Fournisseur")
     *
     */
    protected $fournisseur;

    /**
     * @var \DateTime
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
     *   @ORM\JoinColumn(name="createdBy_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $createdBy;

    /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="updatedBy_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $updatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * One Commande can contain Many Pagnes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\CommandePagne", mappedBy="pagne")
     */
    private $cmdPagne;

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Pagne
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
     * @return Pagne
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
     * Set mesure
     *
     * @param float $mesure
     *
     * @return Pagne
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
     * Set prix
     *
     * @param integer $prix
     *
     * @return Pagne
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Agent
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Pagne
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
     * @return Pagne
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
     * Set agence
     *
     * @param \tontineBundle\Entity\Agency $agence
     *
     * @return Pagne
     */
    public function setAgence(\tontineBundle\Entity\Agency $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \tontineBundle\Entity\Agency
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return Pagne
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
     * @return Pagne
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


    function getFilePhoto()
    {
        return $this->filePhoto;
    }

    function setFilePhoto(\Symfony\Component\HttpFoundation\File\File $filePhoto)
    {
        $this->filePhoto = $filePhoto;
    }


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
     * Set categorie
     *
     * @param \tontineBundle\Entity\Categorie $categorie
     *
     * @return Pagne
     */
    public function setCategorie(\tontineBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \tontineBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set fournisseur
     *
     * @param \tontineBundle\Entity\Fournisseur $fournisseur
     *
     * @return Pagne
     */
    public function setFournisseur(\tontineBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->designation;
    }

    /**
     * Get fournisseur
     *
     * @return \tontineBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cmdPagne = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cmdPagne
     *
     * @param \tontineBundle\Entity\CommandePagne $cmdPagne
     *
     * @return Pagne
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

    /**
     * Set fiche
     *
     * @param \tontineBundle\Entity\FicheTravail $fiche
     *
     * @return Pagne
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
}
