<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Piece
 *
 * @ORM\Table(name="piece")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\PieceRepository")
 */
class Piece
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     * @Assert\NotBlank(message="invalide")
     * @Assert\NotNull(message="invalide")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="dossier", type="string", length=255, nullable=true)
     * 
     * @Assert\NotNull(message="invalide")
     */
    private $dossier;
    
    
    
    /**
     * @var Symfony\Component\HttpFoundation\File\File
     * 
     * @Assert\NotNull(message="invalide")
     */
    
    private $file;

    
    function getFile() {
        return $this->file;
    }

    function setFile(\Symfony\Component\HttpFoundation\File\File $file) {
        $this->file = $file;
    }

        
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Piece
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
     * Set dossier
     *
     * @param string $dossier
     *
     * @return Piece
     */
    public function setDossier($dossier)
    {
        $this->dossier = $dossier;

        return $this;
    }

    /**
     * Get dossier
     *
     * @return string
     */
    public function getDossier()
    {
        return $this->dossier;
    }
}
