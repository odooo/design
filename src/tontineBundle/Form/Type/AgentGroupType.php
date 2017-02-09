<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use tontineBundle\Manager\AgentGroupManager;

class AgentGroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $roles = array_map(function($ary) {
            return array_flip($ary);
        }, $options['roles']);        

        $builder
            ->add('name', null, [
                'label' => 'Nom du groupe (Ex: Clientele)'
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Permissions du groupe',
                'choices' => $roles,
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }   

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\AgentGroup',
            'roles' => [],
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_agentgroup';
    }
}
