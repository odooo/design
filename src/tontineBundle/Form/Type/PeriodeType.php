<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeriodeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut', null,array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy",
                'label' => "Début: ",
                "attr" => array(
                            "placeholder" => "Ex: 02/15/2017 10:15:50",
                            "class" => "datepicker"
                          )
                ))
                ->add('dateFin', null,array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy",
                'label' => "Fin:",
                "attr" => array(
                            "placeholder" => "Ex: 02/15/2017 10:15:50",
                            "class" => "datepicker"
                          )
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Periode',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_periode';
    }


}
