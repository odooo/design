<?php

namespace tontineBundle\Form\DataTransformer;

use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\DataTransformerInterface;
use Doctrine\Common\Persistence\ObjectManager;

class EntityToPrimaryKeyTransformer implements DataTransformerInterface
{
	private $entityManager;

    private $options;
	
	public function __construct(ObjectManager $entityManager, $options)
	{
		$this->entityManager = $entityManager;
        $this->options = $options;
	}
	
	public function transform($client)
    {
        if (null === $client) {
            return '';
        }

        return $client->getId();
    }
    
    public function reverseTransform($id)
    {
        $id = intval($id);
        $entity = null;

        if ($this->options['choices']) {
            foreach($this->options['choices'] as $key => $value) {
                if ($value->getId() == $id) {
                    $entity = $value;
                    if (is_callable($this->options['choice_value'])) {
                        $entity = call_user_func_array($this->options['choice_value'], [$entity]);
                    }
                }
            }
        } elseif ($this->options['class'] and $id != 0) {
            $entity = $this->entityManager->getRepository($this->options['class'])->find($id);
            if ($entity === null) {
                throw new TransformationFailedException(sprintf('A %s with id %s does not exist!', $this->options['class'], $id));
            }
        }                    

        return $entity;
    }
}

