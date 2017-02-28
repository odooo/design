<?php

namespace tontineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use tontineBundle\Form\PagneType;

use tontineBundle\Entity\Pagne;
use tontineBundle\Form\Type\ReferencePagneType;
use tontineBundle\Repository\NomodeleRepository;
use tontineBundle\Repository\ModeleRepository;
use tontineBundle\Repository\PagneRepository;

class CommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reference', null, array('required' => true))
            ->add('designation', TextareaType::class, array(
                    'attr' => array(
                        'class' => 'c4')
                )
            )
            ->add('client', null, [
                'label' => 'Client',
                'required' => true,
                'placeholder' => 'Choisissez le client',
                'choice_label' => 'name',
            ])
            ->add('typeCommande', ChoiceType::class, array(
                'choices' => array(
                    'Main d\'oeuvre' => 'm',
                    'Vente' => 'v',
                    'Vente de modèles boutique' => 'a',
                    'Vente de modèles non boutique' => 'o'
                ),
                'required' => true,
                'placeholder' => 'Choisissez le type de commande',
                'empty_data' => null
            ))
            ->add('pagne', EntityType::class, array(
                'class' => 'tontineBundle\Entity\Pagne',
                'query_builder' => function (PagneRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->where('p.mesure > 0 ')
                        ->orderBy('p.reference', 'ASC');
                },
                'required' => false,
                'multiple' => true,
                'choice_label' => 'reference',
            ))
            ->add('modele', EntityType::class, array(
                'class' => 'tontineBundle\Entity\Modele',
                'query_builder' => function (ModeleRepository $er) {
                    return $er->createQueryBuilder('m')
                        ->where('m.quantite > 0 ')
                        ->orderBy('m.libelle', 'ASC');
                },
                'required' => false,
                'multiple' => true,
                'choice_label' => 'libelle',
            ))
            ->add('nomodele', EntityType::class, array(
                'class' => 'tontineBundle\Entity\Nomodele',
                'query_builder' => function (NomodeleRepository $er) {
                    return $er->createQueryBuilder('n')
                        ->where('n.quantite > 0 ')
                        ->orderBy('n.libelle', 'ASC');
                },
                'required' => false,
                'multiple' => true,
                'choice_label' => 'libelle',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Commande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_commande';
    }


}
