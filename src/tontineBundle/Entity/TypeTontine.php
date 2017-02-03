<?php

namespace tontineBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Lists;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Details;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Form;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Action;
use EldoMagan\Bundle\CrudGeneratorBundle\Annotation\Code;
/**
 * TypeTontine
 *
 * @ORM\Table(name="type_tontine")
 * @ORM\Entity(repositoryClass="tontineBundle\Repository\TypeTontineRepository")
 */

class TypeTontine
{
    const JOURNALIER   = "Journalier";
    const HEBDOMADAIRE = "Hebdomadaire";
    const MENSUEL      = "Mensuel";
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true) 
     *  
     */
    private $libelle;

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
     * @return Client
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
}
