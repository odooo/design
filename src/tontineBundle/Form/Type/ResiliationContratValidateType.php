<?php

namespace tontineBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ResiliationContratValidateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            
                
            ->add('observation', null, [
                'label' => 'Observation',
            ])
           
           
             ->add('dateValidation',null, array(
                'widget' => "single_text",
                'format' => "dd/mm/yyyy H:m:s",
                'label' => "Date de Validation",
                "attr" => array(
                            "placeholder" => "Ex: 29/12/2016 12:12:12",
                            "class" => "datetimepicker"
                          )
                ))       
             ->add('dateResiliation',null, array(
                'widget' => "single_text",
                'format' => "dd/mm/yyyy H:m:s",
                'label' => "Date de Resiliation",
                "attr" => array(
                            "placeholder" => "Ex: 29/12/2016 12:12:12",
                            "class" => "datetimepicker"
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
