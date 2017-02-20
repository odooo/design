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

use tontineBundle\Entity\Commande;
use tontineBundle\Form\Type\ReferencePagneType;
use tontineBundle\Repository\CommandeRepository;

class FicheTravailType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextareaType::class, array(
                    'attr' => array(
                    'class' => 'c4'),
                    'required' => true
                )
            )
            ->add('quantite', null, array('required' => false))
            ->add('charges', null, array('required' => false))
            ->add('mesure', null, array('required' => false))
            ->add('montant', null, array('required' => true))
            //->add('dateLivraison')
            ->add('longGHChemise')
            ->add('dosChemise')
            ->add('poitrineChemise')
            ->add('tailleChemise')
            ->add('hancheChemise')
            ->add('tmancheChemise')
            ->add('colChemise')
            ->add('poignetChemise')
            ->add('longGHPantalon')
            ->add('dosPantalon')
            ->add('poitrinePantalon')
            ->add('taillePantalon')
            ->add('hanchePantalon')
            ->add('tmanchePantalon')
            ->add('colPantalon')
            ->add('poignetPantalon')
            /*->add('commande', EntityType::class, array(
                'class' => 'tontineBundle\Entity\Commande',
                'query_builder' => function (CommandeRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.reference', 'ASC');
                },
                'required' => false,
                //'multiple' => true,
                'choice_label' => 'reference',
            ))*/;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\FicheTravail'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_fichetravail';
    }


}
