<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModeleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            
        $builder
            ->add('libelle', null, [
                'label' => 'Libellé * : ',
                'required' => true,
            ])
            ->add('quantite', null, [
                'label' => 'Quantité * : ',
                'required' => true,
            ])
            ->add('mesure', null, [
                'label' => 'Mesure unitaire (en m) * : ',
                'required' => true,
            ])
            ->add('pagne', null, [
                'label' => 'Tissu *',
                'required' => true,
                'placeholder' => 'Choisissez le pagne ayant servi à confectionner le modèle',
                'choice_label' => 'reference',
            ])
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Modele',
            'new' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_modele';
    }
}
