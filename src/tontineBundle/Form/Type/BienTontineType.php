<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class BienTontineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder            
            ->add('DateVisite1', null,array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy",
                'label' => "1ère Date de visite: *",
                'required' => true,
                "attr" => array(
                            "placeholder" => "26/01/2017",
                            "class" => "datetimepicker"
                          )
                ))
            ->add('DateVisite2', null,array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy",
                'label' => "2ème Date de visite: *",
                'required' => true,
                "attr" => array(
                            "placeholder" => "26/01/2017",
                            "class" => "datetimepicker"
                          )
                ))
            ->add('DateVisite3', null,array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy",
                'label' => "3ème Date de visite: *",
                'required' => true,
                "attr" => array(
                            "placeholder" => "26/01/2017",
                            "class" => "datetimepicker"
                          )
                ));

                $builder ->add('zone', ChoiceType::class ,array(
                'label' => 'Zone : *',
                'choices' => $options['zone'],
                'required' => true,
                'preferred_choices' => array($options['default_zone']),
                'attr' => array(
                    'class' => 'select2')
                ));

                $builder ->add('quartier', ChoiceType::class ,array(
                'label' => 'Quartier : *',
                'choices' => $options['quartier'],  
                'required' => true,
                'preferred_choices' => array($options['default_quartier']),
                'attr' => array(
                    'class' => 'select2')
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\BienTontine',
            'zone' => array(),
            'quartier'=> array(),
            'default_zone' => '',
            'default_quartier'=> '',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_bien_tontine';
    }


}
