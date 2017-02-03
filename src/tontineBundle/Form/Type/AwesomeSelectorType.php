<?php

namespace tontineBundle\Form\Type;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use tontineBundle\Form\DataTransformer\EntityToPrimaryKeyTransformer;

class AwesomeSelectorType extends AbstractType
{
    private $entityManager;
    
    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new EntityToPrimaryKeyTransformer($this->entityManager, $options);
        $builder->addModelTransformer($transformer);
    }   
          
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => null,
            'choices' => null,
            'choice_value' => null,
            'attr' => [
                'data-select' => 'awesome-selector',
            ]           
        ]);
    }
    
    public function getParent()
    {
        return TextType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_client';
    }
}
