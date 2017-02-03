<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TontineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $tontine = isset($options['data']) ? $options['data'] : null;
        $clientHidden = '';
        if ($tontine) {
            $clientHidden = $tontine->getClient() == null ? '' : 'hidden';
        }        
                
        $builder
            ->add('client', AwesomeSelectorType::class, [
                'label' => 'Sélectionnez le client',
                'class' => 'tontineBundle\Entity\Client',
                'attr'  => [
                    'class'     => $clientHidden,
                    'data-list' => '#user-list',
                ],
                'label_attr' => [
                    'class'  => $clientHidden,
                ]
            ])
            ->add('bien', AwesomeSelectorType::class, [
                'label'         => 'Sélectionnez un bien',
                'class'         => 'tontineBundle\Entity\BienTontine',
                'required'      => false,
                'attr'          => [
                    'data-list'   => '#bien-list',
                    'data-select' => 'awesome-selector'
                ],
            ])                        
            ->add('mode', null, [
                'label'        => 'Mode de tontine',
                'class'        => 'tontineBundle\Entity\TypeTontine',
                'placeholder'  => 'Sélectionnez le mode de tontine',
                'choice_label' => 'libelle',
                'required'     => true,
            ])
            ->add('duree', null, [
                'label'        => 'Durée de la tontine',
                'required'     => false,
            ])
            ->add('montant', null, [
                'required' => false,
                'label'    => 'Mise souhaité'
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Tontine'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_tontine';
    }    
}
