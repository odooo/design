<?php

namespace tontineBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContratType extends AbstractType
{
    
   
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $biens=$options['biens'];
        $code=$options['codecontrat'];
       
      
        $builder
            ->add('codeBien',ChoiceType::class,array( 'choices'=>$biens,'attr'=>array(
                    'class'=>'select2'
                ))
                    
                  )
                
            ->add('code', null,
                    ['label' => 'Code du Contrat','data'=>$code],
                    array('read_only' =>'true'))
           
                
            ->add('client', EntityType::class, array(
                'class' => 'tontineBundle:Client', 
                'attr'=>array(
                    'class'=>'select2'
                ) ) 
            )
                
             ->add('piece',PieceType::class,array(
                'required' => true,
                ));
                
           
             
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Contrat',
            'biens'=>null,
            'codecontrat'=>null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_contrat';
    }
    
   

}
