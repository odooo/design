<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use tontineBundle\Form\Type\PieceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ConditionGeneraleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateSignature', null,array(
                'widget' => "single_text",
                'format' => "dd/mm/yyyy",
                'label' => "Date de signature * ",
               'required' => true,
                "attr" => array(
                            "placeholder" => "Ex: 02/15/2017",
                            "class" => "datepicker"
                          )
                ))
            ->add('pieces', CollectionType::class, [
                'label' => 'Pieces * : ',
                'entry_type' => PieceType::class,
                'required' => true,
                'allow_add' => true,
                'allow_delete' =>true
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\ConditionGenerale'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_conditiongenerale';
    }

}
