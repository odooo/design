<?php

namespace tontineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AgentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $new = $options['new'];
        
        if($new){
            $builder->add('filePhoto', FileType::class, [
                'label' => 'Choisissez la photo de profile* : ',
                'required' => true,
                'attr' => array(
                   'accept'=>'image/*',
                    'class' => 'fselect'
                )])->add('plainPassword', RepeatedType::class, array(
                        'type' => PasswordType::class,
                        'required'    => true,
                        'invalid_message' => 'Les mots de passe ne sont pas conformes.',
                        'first_options'  => array('label' => 'Mot de passe: * '),
                        'second_options' => array('label' => 'Confirmer mot de passe: * '),
                    ));
        }else{
            $builder->add('filePhoto', FileType::class, [
                'label' => 'Choisissez la photo de profile* : ',
                'required'    => false,
                'attr' => array(
                   'accept'=>'image/*',
                    'class' => 'fselect'
                )])->add('plainPassword', RepeatedType::class, array(
                        'type' => PasswordType::class,
                        'required'    => false,
                        'invalid_message' => 'Les mots de passe ne sont pas conformes.',
                        'first_options'  => array('label' => 'Mot de passe: * '),
                        'second_options' => array('label' => 'Confirmer mot de passe: * '),
                    ));
        }
        
        $builder
            ->add('nom', null, array(
                'label' => "Nom: * ",
                'required' => true)
            )
            ->add('prenom', null, array(
                'label' => "Prénons: * ",
                'required' => true)
            )
            ->add('username', null, array(
                'label' => "Non d'utilisateur: * ",
                'required' => true)
            )
            ->add('contact', null, array(
                'label' => "Contact: * ",
                'required' => true)
            )
            ->add('email', EmailType::class, array(
                'label' => "Adresse email: * ",
                'required' => true)
            )
            ->add('agence', null, [
                'label' => 'Agence de l\'agent',
                'placeholder' => 'Choisissez l\'agence de l\'agent',
            ])
            ->add('profil', null, [
                'label' => 'Profil de l\'agent',
                'placeholder' => 'Choisissez le profil de l\'agent',
            ])
        ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Agent',
            'option' => "",
            'new' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'agent_registration';
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

}
