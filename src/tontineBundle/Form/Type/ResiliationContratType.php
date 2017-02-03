<?php

namespace tontineBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ResiliationContratType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeMotif', null, [
                'label' => 'Type Motif',
            ])
            ->add('typeResiliation',
                ChoiceType::class,
                ['choices'=>
                    ['Sans Contrat'=>'Sans Contrat',
                        'Avec Contrat'=>'Avec Contrat'], 'required'  => false,'attr'=>array(
                    'class'=>'select2'
                )]
        )
                
            ->add('detailsMotif', null, [
                'label' => 'Details du Motif',
            ])
           
             ->add('contrat', EntityType::class, ['class' => 'tontineBundle:Contrat',
               'choice_label'=>'code', 
                'attr'=>array(
                    'class'=>'select2'
                )]
        )
           
             ->add('dateDemande',null, array(
                'widget' => "single_text",
                'format' => "dd/MM/yyyy",
                'label' => "Date de demande",
                "attr" => array(
                            "placeholder" => "Ex: 29/12/2016",
                            "class" => "datepicker"
                          )
                ))       ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\ResiliationContrat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_resiliationcontrat';
    }


}
