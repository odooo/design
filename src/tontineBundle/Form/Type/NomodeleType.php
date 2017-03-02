<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NomodeleType extends AbstractType
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
            ->add('prixAchat', null, [
                'label' => 'Prix unitaire d\'achat (en FCFA) * : ',
                'required' => true,
            ])
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Nomodele',
            'new' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_nomodele';
    }
}
