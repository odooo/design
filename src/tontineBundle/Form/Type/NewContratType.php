<?php

namespace tontineBundle\Form\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NewContratType extends AbstractType
{
    
   
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $code=$options['codecontrat']; 
      
        $builder
        
             ->add('code', null,
                    ['label' => 'Code du Contrat','data'=>$code],
                    array('read_only' =>'true'))  
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
