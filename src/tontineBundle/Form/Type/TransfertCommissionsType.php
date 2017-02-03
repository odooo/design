<?php

namespace tontineBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransfertCommissionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('transfertfonds', EntityType::class, [
                'label' => 'Transfert Fonds associé',
                'class' => 'tontineBundle\Entity\TransfertFonds',
                'placeholder' => 'Sélectionnez le transfert de fonds',
                'choice_label' => function ($entity) {
                    return sprintf("Transfert de fonds n°%s du %s", $entity->getId(), $entity->getCreatedAt()->format('d/m/Y'));
                },
                'attr' => [
                    'class' => 'select2',
                ]
            ])
            ->add('pieceFile', FileType::class, [
                'label' => 'Pièce justificative',
                'required' => false,
                'attr' => [                    
                    'class' => 'form-control'
                ],                
            ])
            ->add('montant', HiddenType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\TransfertCommissions'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_transfertcommissions';
    }


}
