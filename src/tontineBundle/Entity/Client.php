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
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\ClientRepository")
 * @ORM\EntityListeners("tontineBundle\EntityListener\TontineEntityListener")
 */
class Client
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
     * @var boolean
     * @ORM\Column(name="photoPrise", type="boolean", nullable=true, options={"default"=false})
     * 
     * @Assert\IsTrue(message = "Cochez cette case pour confirmer que la photo du client est reçue")
     */    
    private $photoPrise;
    
    /**
     * @var boolean
     * @ORM\Column(name="piecePrise", type="boolean", nullable=true, options={"default"=false})
     * 
     * @Assert\IsTrue(message = "Cochez cette case pour confirmer que la pièce d'identité ou l'acte de naissance du client est reçu")
     */    
    private $piecePrise;
    
    /**
     * @var boolean
     * @ORM\Column(name="conditionsSignee", type="boolean", nullable=true, options={"default"=false})
     * 
     * @Assert\IsTrue(message = "Cochez cette case pour confirmer que les conditions générales ont été signées par le client")
     * 
     */    
    private $conditionSignee;
    
    /**
     * @var boolean
     * @ORM\Column(name="feuille", type="boolean", nullable=true, options={"default"=false})
     * 
     * @Assert\IsTrue(message = "Cochez cette case pour confirmer que la feuille de choix a été reçue par le client")
     * 
     */    
    private $feuilleChoixRecue;
    
    
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
     * @var string
     * @ORM\Column(name="pieceidentite", type="string", length=255, nullable=true)
     */    
    private $pieceidentite;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     *  
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     * 
     *  
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255, nullable=true)
     * 
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     * 
     *  
     */
    private $quartier;

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
     * @var \tontineBundle\Entity\Tontine
     * @ORM\OneToMany(targetEntity="\tontineBundle\Entity\Tontine", mappedBy="client",cascade={"persist"})
     */
    private $tontines;
    
    /**
     * @var \tontineBundle\Entity\ConditionGenerales
     *
     * @ORM\OneToOne(targetEntity="tontineBundle\Entity\ConditionGenerale", inversedBy="client", cascade={"persist"})
     */
    private $condition;
    
    /**
     * @var \tontineBundle\Entity\Visite
     *
     * @ORM\OneToMany(targetEntity="tontineBundle\Entity\Visite", mappedBy="client", cascade={"persist"})
     */
    private $visites;
    
    public function __construct() {
        $this->tontines = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Client
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
     * @return Client
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Client
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set quartier
     *
     * @param string $quartier
     *
     * @return Client
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get quartier
     *
     * @return string
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Add tontine
     *
     * @param \tontineBundle\Entity\Tontine $tontine
     *
     * @return Client
     */
    public function addTontine(\tontineBundle\Entity\Tontine $tontine)
    {
        $this->tontines[] = $tontine;

        return $this;
    }

    /**
     * Remove tontine
     *
     * @param \tontineBundle\Entity\Tontine $tontine
     */
    public function removeTontine(\tontineBundle\Entity\Tontine $tontine)
    {
        $this->tontines->removeElement($tontine);
    }

    /**
     * Get tontines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTontines()
    {
        return $this->tontines;
    }

    /**
     * Set contacts
     *
     * @param string $contacts
     *
     * @return Client
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
    return $this->getPrenom() .' '. $this->getNom();}

    /**
     * Set condition
     *
     * @param \tontineBundle\Entity\ConditionGenerale $condition
     *
     * @return Client
     */
    public function setCondition(\tontineBundle\Entity\ConditionGenerale $condition = null)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return \tontineBundle\Entity\ConditionGenerale
     */
    public function getCondition()
    {
        return $this->condition;

    }

    public function name()
    {
        return $this->prenom . ' ' . $this->nom;
    }
    
    

    /**
     * Add visite
     *
     * @param \tontineBundle\Entity\Visite $visite
     *
     * @return Client
     */
    public function addVisite(\tontineBundle\Entity\Visite $visite)
    {
        $this->visites[] = $visite;

        return $this;
    }
    
    
    public function setVisites($visites)
    {
        $this->visites = $visites;

        return $this;
    }

    /**
     * Remove visite
     *
     * @param \tontineBundle\Entity\Visite $visite
     */
    public function removeVisite(\tontineBundle\Entity\Visite $visite)
    {
        $this->visites->removeElement($visite);
    }

    /**
     * Get visites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisites()
    {
        return $this->visites;
    }
    
    
     public function conditionAccept(){
        
        if ($this->condition) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Client
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
     * Set pieceidentite
     *
     * @param string $pieceidentite
     *
     * @return Client
     */
    public function setPieceidentite($pieceidentite)
    {
        $this->pieceidentite = $pieceidentite;

        return $this;
    }

    /**
     * Get pieceidentite
     *
     * @return string
     */
    public function getPieceidentite()
    {
        return $this->pieceidentite;
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
    
    /**
     * @var Symfony\Component\HttpFoundation\File\File
     * 
     */
    
    private $filePieceidentite;
    
    function getFilePieceidentite() {
        return $this->filePieceidentite;
    }

    function setFilePieceidentite(\Symfony\Component\HttpFoundation\File\File $filePieceidentite) {
        $this->filePieceidentite = $filePieceidentite;
    }


    

    /**
     * Set photoPrise
     *
     * @param boolean $photoPrise
     *
     * @return Client
     */
    public function setPhotoPrise($photoPrise)
    {
        $this->photoPrise = $photoPrise;

        return $this;
    }

    /**
     * Get photoPrise
     *
     * @return boolean
     */
    public function getPhotoPrise()
    {
        return $this->photoPrise;
    }

    /**
     * Set piecePrise
     *
     * @param boolean $piecePrise
     *
     * @return Client
     */
    public function setPiecePrise($piecePrise)
    {
        $this->piecePrise = $piecePrise;

        return $this;
    }

    /**
     * Get piecePrise
     *
     * @return boolean
     */
    public function getPiecePrise()
    {
        return $this->piecePrise;
    }

    /**
     * Set conditionSignee
     *
     * @param boolean $conditionSignee
     *
     * @return Client
     */
    public function setConditionSignee($conditionSignee)
    {
        $this->conditionSignee = $conditionSignee;

        return $this;
    }

    /**
     * Get conditionSignee
     *
     * @return boolean
     */
    public function getConditionSignee()
    {
        return $this->conditionSignee;
    }

    /**
     * Set feuilleChoixRecue
     *
     * @param boolean $feuilleChoixRecue
     *
     * @return Client
     */
    public function setFeuilleChoixRecue($feuilleChoixRecue)
    {
        $this->feuilleChoixRecue = $feuilleChoixRecue;

        return $this;
    }

    /**
     * Get feuilleChoixRecue
     *
     * @return boolean
     */
    public function getFeuilleChoixRecue()
    {
        return $this->feuilleChoixRecue;
    }
}
