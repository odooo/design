<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use AjaxifySearch\Annotation\AjaxifySearch;
use \Symfony\Component\HttpFoundation\File\File;

/**
 * Agent
 *
 * @ORM\Table(name="agent")
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\AgentRepository")
 * 
 * @AjaxifySearch(
 *     alias = "agent",
 *     itemTemplate = "tontineBundle:Agent:partials/item.html.twig",
 *     searchables = {"nom", "prenom", "typeUtilisateur"},
 *     orderBy = { "id": "DESC" }
 * )
 * 
 */

class Agent extends BaseUser
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     * 
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     * 
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=100, nullable=true)
     */
    private $contact;

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
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\AgentGroup")
     */
    protected $profil;

    /**
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agency")
     *
     * @Assert\NotBlank(message="Vous devez renseigner l'agence de l'agent")
     */
    protected $agence;
    
    
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
     * One Agent can register Many Commandes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\Commande", mappedBy="createdBy")
     */
    private $createdCommande;

    /**
     * One Agent can update Many Commandes.
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\Commande", mappedBy="updatedBy")
     */
    private $updatedCommande;
    
    
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Agent
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Agent
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Agent
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
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
     * Set photo file
     *
     * @return Agent     
     */
    function setFilePhoto(\Symfony\Component\HttpFoundation\File\File $filePhoto) 
    {
        $this->filePhoto = $filePhoto;
    }

    /**
     * Get photo file
     *
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    function getFilePhoto() 
    {
        return $this->filePhoto;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Agent
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
     * @return Agent
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
     * Set group
     *
     * @param \tontineBundle\Entity\AgentGroup $group
     *
     * @return Agent
     */
    public function setProfil(\tontineBundle\Entity\AgentGroup $profil = null)
    {
        $this->profil = $profil;

        $this->addGroup($this->profil);

        return $this;
    }

    /**
     * Get group
     *
     * @return \tontineBundle\Entity\AgentGroup
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set agence
     *
     * @param \tontineBundle\Entity\Agency $agence
     *
     * @return Agent
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
     * @return Agent
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
     * @return Agent
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

    /**
     * {@inheritdoc}
     */
    public function getGroups()
    {
        $groups = new \Doctrine\Common\Collections\ArrayCollection();

        if ($this->profil) {
            $groups->add($this->getProfil());
        }        

        return $groups;
    }

    /**
     * Get client dislayable name
     */
    function getName() 
    {
        return $this->prenom." ".$this->nom;
    }    
    
    /**
     * Get client dislayable name
     */
    public function name()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    /**
     * Get agent group name
     */
    public function getProfilName()
    {
        return $this->getProfil() ? $this->getProfil()->getName() : 'Définissez un profil pour cet agent !!';
    }    

    /**
     * Add createdCommande
     *
     * @param \tontineBundle\Entity\Commande $createdCommande
     *
     * @return Agent
     */
    public function addCreatedCommande(\tontineBundle\Entity\Commande $createdCommande)
    {
        $this->createdCommande[] = $createdCommande;

        return $this;
    }

    /**
     * Remove createdCommande
     *
     * @param \tontineBundle\Entity\Commande $createdCommande
     */
    public function removeCreatedCommande(\tontineBundle\Entity\Commande $createdCommande)
    {
        $this->createdCommande->removeElement($createdCommande);
    }

    /**
     * Get createdCommande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatedCommande()
    {
        return $this->createdCommande;
    }

    /**
     * Add updatedCommande
     *
     * @param \tontineBundle\Entity\Commande $updatedCommande
     *
     * @return Agent
     */
    public function addUpdatedCommande(\tontineBundle\Entity\Commande $updatedCommande)
    {
        $this->updatedCommande[] = $updatedCommande;

        return $this;
    }

    /**
     * Remove updatedCommande
     *
     * @param \tontineBundle\Entity\Commande $updatedCommande
     */
    public function removeUpdatedCommande(\tontineBundle\Entity\Commande $updatedCommande)
    {
        $this->updatedCommande->removeElement($updatedCommande);
    }

    /**
     * Get updatedCommande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUpdatedCommande()
    {
        return $this->updatedCommande;
    }
}
