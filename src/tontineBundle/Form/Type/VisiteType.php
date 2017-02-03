<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VisiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $builder
            ->add('bien', AwesomeSelectorType::class, [
                'label'         => 'Sélectionnez un bien',
                'class'         => 'tontineBundle\Entity\BienTontine',
                'attr'          => [
                    'data-list'   => '#bien-list'
                ],
                'label_attr'    => [
                ]
            ]);
        
            if($options['bien']){
                $bien = $options['bien'];
                
                $builder->add('choixDate', ChoiceType::class, array(
                'required' => true,
                'choices' => array(
                    $bien->getDateVisite1()->format("d/m/Y h:i:s") => 1,
                    $bien->getDateVisite2()->format("d/m/Y h:i:s") => 2,
                    $bien->getDateVisite3()->format("d/m/Y h:i:s") => 3,
                    "Autre date" => 4
                ),
                    'label' => "Dates de visite prédéfinies: * ",
                    'placeholder' => "Choisissez une date",
                    'attr'=>array(
                        'class' => ($options['choixDate'] == 4)?"datePerso":"",
                    )
                ));
            }
                
            if($options['bien'] && ($options['choixDate'] == 4)){
                $builder->add('dateDisponibilite', null,array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy H:m:s",
                'label' => "Date de disponibilité: *",
                'required' => true,
                "attr" => array(
                            "placeholder" => "Ex: 02/15/2017 10:15:50",
                            "class" => "datetimepicker"
                          )
                ));
            }
        
            $builder->add('moyenDeplacement', null, [
                'label' => 'Moyen de déplacement: *',
                'required' => true,
            ]);
        /*if($options['level'] != 'new'){
            $builder->add('dateEffective', null, [
                'label' => 'Date effective',
                'required' => true,
            ])
            ->add('client', null, [
                'label' => 'Client',
                'required' => true,
            ]);
        }*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Visite',
            'level' => 'new',
            'bien' => null,
            'choixDate' => 0, 
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_visite';
    }


}
