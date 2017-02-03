<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Parameters
{
    /**
     * @var array
     */
    private $parameters;

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;        
    }

    public function __get($property)
    {
        foreach($this->parameters as $parameter) {
            if ($parameter->getName() == $property) {
                return $parameter->getValue();
            }
        }
    }

    public function __set($property, $value)
    {
        foreach($this->parameters as $parameter) {
            if ($parameter->getName() == $property) {
                $parameter->setValue($value);
                break;
            }
        }   

        return $this;
    }
}

