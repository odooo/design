<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quartier', ChoiceType::class ,array(
                'label' => 'Quartier :',
                'choices' => $options['quartier'],
                'choice_label' => function($val, $index){
                    return $val;
                },                
                'placeholder' => 'Sélectionnez un quatier',
                'empty_data'  => null,
                'required' => false,
                'attr' => array(
                    'class' => 'select2'
                )
                ))
            ->add('zone', ChoiceType::class ,array(
                'label' => 'Zone :',
                'choices' => $options['zones'],
                'choice_label' => function($val, $index){
                    return $val;
                },                
                'placeholder' => 'Sélectionnez une zone',
                'empty_data'  => null,
                'required' => false,
                'attr' => array(
                    'class' => 'select2'
                )
                ))
            ->add('mode', EntityType::class, [
                'class' => 'tontineBundle\Entity\TypeTontine',
                'label' => 'Mode :',
                'choice_label' => 'libelle',
                'placeholder' => 'Sélectionnez un mode',
                'empty_data'  => null,
                'required' => false,
                'attr' => array(
                    'class' => 'select2'
                )
            ])
            ->add('mise', IntegerType::class, [
                'label'         => 'Votre mise Maxi :',
                'required' => false
            ])    ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Form\DataTransformer\Search',
            'zones' => array(),
            'quartier' => array()
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_search';
    }


}
