<?php

namespace tontineBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Code;
use Symfony\Component\HttpFoundation\File\File;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\FournisseurRepository")
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 */
class Fournisseur
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     * 
     *  
     */
    
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     * 
     *  
     */
    private $prenom;
    
    /**
     * @var string
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */    
    private $photo;

    /**
     *
     * @ORM\Column(name="contacts", type="phone_number", nullable=true)
     * 
     * @AssertPhoneNumber
     */
    private $contacts;
    
    /**
     * @ORM\Column(name="contactsConfirmation", type="phone_number", nullable=true)
     * 
     * @AssertPhoneNumber
     */
    private $contactsConfirmation;
    
    function getContactsConfirmation() {
        return $this->contactsConfirmation;
    }

    function setContactsConfirmation($contactsConfirmation) {
        $this->contactsConfirmation = $contactsConfirmation;
    }
    
    /**
     * @Assert\IsTrue(message = "Confirmation invalide du contact!")
     */
    public function isContactValid()
    {
        return ($this->contacts->getCountryCode() == $this->contactsConfirmation->getCountryCode())
                &&($this->contacts->getNationalNumber() == $this->contactsConfirmation->getNationalNumber());
    }

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     * 
     *  
     */
    private $adresse;
    

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
     *   @ORM\JoinColumn(name="createdBy_id", referencedColumnName="id")
     * })
    * 
     * 
    * 
     */
    private $createdBy;
    
   /**
     * @var \tontineBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="updatedBy_id", referencedColumnName="id")
     * })
     */
    private $updatedBy;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Fournisseur
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
     * @return Fournisseur
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Fournisseur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Fournisseur
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
     * Set createdBy
     *
     * @param \tontineBundle\Entity\Agent $createdBy
     *
     * @return Fournisseur
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Fournisseur
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
     * Set updatedBy
     *
     * @param \tontineBundle\Entity\Agent $updatedBy
     *
     * @return Fournisseur
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
     * Set contacts
     *
     * @param string $contacts
     *
     * @return Fournisseur
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get contacts
     *
     * @return string
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    
   
    public function __toString()
    {
        return $this->getPrenom() .' '. $this->getNom();
    }

    public function name()
    {
        return $this->prenom . ' ' . $this->nom;
    }
        
    

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Fournisseur
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
     * @var Symfony\Component\HttpFoundation\File\File
     * 
     */
    
    private $filePhoto;
    
    function getFilePhoto() {
        return $this->filePhoto;
    }

    function setFilePhoto(\Symfony\Component\HttpFoundation\File\File $filePhoto) {
        $this->filePhoto = $filePhoto;
    }

}