<?php

namespace tontineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use tontineBundle\Form\PagneType;

use tontineBundle\Entity\Pagne;
use tontineBundle\Form\Type\ReferencePagneType;
use tontineBundle\Repository\PagneRepository;

class CommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reference')->add('designation')->add('mesure')->add('client')
            ->add('typeCommande', ChoiceType::class, array(
                'choices' => array(
                    'Main d\'oeuvre' => 'm',
                    'Vente' => 'v'
                ),
                'required'    => false,
                'placeholder' => 'Choisissez le type de commande',
                'empty_data'  => null
            ))
            ->add('pagnes', EntityType::class, [
                'class' => 'tontineBundle\Entity\Pagne',
                'choice_label' => function($pagnes, $key, $index) {
                    /** @var Pagne $pagnes */
                    return strtoupper($pagnes->getDesignation());
                },
//                'choice_label' => 'designation',
                'choice_value' => function ($choice) {

                    dump($choice); //  expect an entity with id from ids

                    return $choice;
                },
                'label' => 'Pagnes',
                'multiple' => true,
                'expanded' => true,
                'query_builder' => function (PagneRepository $repository) {

                    //dump($ids); // just to be sure,
                    // and confirm they match the dumped choices

                    return $repository->createQueryBuilder('e')
//                        ->where('e.id IN(:ids)')
//                        ->setParameter(':ids', array_values($ids))
                        ->orderBy('e.designation', 'ASC');
                }
            ]);
//            ->add('pagnes', EntityType::class, array(
//                'class' => 'tontineBundle\Entity\Pagne',
//                'choice_label' => 'username',
//
//            ));
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
