<?php

namespace tontineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PagneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $new = $options['new'];
        
        $builder
            ->add('filePhoto', FileType::class, [
                'label' => 'Choisissez la photo du coupon du pagne* : ',
                'required'    => false,
                'attr' => array(
                   'accept'=>'image/*',
                    'class' => 'fselect'
                )])
            ->add('reference', null, array(
                'label' => "Référence : * ",
                'required' => true)
            )
            ->add('designation', null, array(
                'label' => "Désignation : * ",
                'required' => true)
            )
            ->add('mesure', null, array(
                'label' => "Mesure (en m): * ",
                'required' => true)
            )
            ->add('prix', null, array(
                'label' => "Prix achat (en F CFA) : * ",
                'required' => true)
            )
            ->add('agence', null, [
                'label' => 'Agence de l\'agent',
                'placeholder' => 'Choisissez l\'agence',
            ])
        ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Pagne',
            'option' => "",
            'new' => true,
        ));
    }

}
