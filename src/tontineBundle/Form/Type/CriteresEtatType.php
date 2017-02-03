<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CriteresEtatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach ($options['criteres'] as $critere){
            if($critere == 'typeMise')  $builder->add('typeMise', ChoiceType::class, array(
                                                'choices'  => array(
                                                    'Tout' =>  null,
                                                    'Journalier' => 'Journalier',
                                                    'Hebdomadaire' => 'Hebdomadaire',
                                                    'Mensuel' => 'Mensuel',
                                                    
                                                ),
                                                'label' => 'Type de mise',
                                                'required' => false
              
                                            ));
            elseif ($critere == 'client') $builder->add('client', EntityType::class, array(
                                                                'class' => 'tontineBundle:Client',
                                                                'choice_label' => 'name',
                                                                'placeholder' => '',
                                                                'empty_data'  => null,
                                                                'required' => false
                                                                 ));
                
            elseif ($critere == 'periode')
                $builder->add('periode', PeriodeType::class, array());
            
            else
                $builder->add($critere);
            
        }
        if(count($options['criteres']) == 0){
            $builder
                    ->add('typeMise', ChoiceType::class, array(
                                                'choices'  => array(
                                                    'Tout' =>  null,
                                                    'Journalier' => 'Journalier',
                                                    'Hebdomadaire' => 'Hebdomadaire',
                                                    'Mensuel' => 'Mensuel',
                                                    
                                                ),
                                                'label' => 'Type de mise',
                                                'required' => false
                                                
                                            ))
                    ->add('client', EntityType::class, array(
                                                                'class' => 'tontineBundle:Client',
                                                                'choice_label' => 'name',
                                                                'placeholder' => '',
                                                                'empty_data'  => null,
                                                                'required' => false
                                                                 ))
                    ->add('periode', PeriodeType::class)
                    ->add('typeMotif')
                    ->add('ville')->add('quartier');
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\tontineBundle\Entity\CriteresEtat',
            'criteres' => array()
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_criteresetat';
    }


}
