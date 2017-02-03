<?php

namespace tontineBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="agent_groups")
 */
class AgentGroup extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

     public function __construct()
     {
         $this->roles = array();
     }

     public function __toString()
     {
         return $this->getName();
     }
}
