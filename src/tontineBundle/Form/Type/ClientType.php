<?php

namespace tontineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use libphonenumber\PhoneNumberFormat;
use Misd\PhoneNumberBundle\Form\Type\PhoneNumberType;
use Misd\PhoneNumberBundle\Form\Type\PhoneNumber;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $countries = array
        (
            'AF','AX','AL','DZ','AS','AD','AO','AI','AQ','AG','AR','AM','AW','AU','AT','AZ','BS','BH','BD','BB','BY','BE','BZ','BJ','BM','BT','BO','BA','BW','BV','BR','IO','BN','BG','BF','BI','KH','CM','CA','CV','KY','CF','TD','CL','CN','CX','CC','CO','KM','CG','CD','CK','CR','CI','HR','CU','CY','CZ','DK','DJ','DM','DO','EC','EG','SV','GQ','ER','EE','ET','FK','FO','FJ','FI','FR','GF','PF','TF','GA','GM','GE','DE','GH','GI','GR','GL','GD','GP','GU','GT','GG','GN','GW','GY','HT','HM','VA','HN','HK','HU','IS','IN','ID','IR','IQ','IE','IM','IL','IT','JM','JP','JE','JO','KZ','KE','KI','KR','KW','KG','LA','LV','LB','LS','LR','LY','LI','LT','LU','MO','MK','MG','MW','MY','MV','ML','MT','MH','MQ','MR','MU','YT','MX','FM','MD','MC','MN','ME','MS','MA','MZ','MM','NA','NR','NP','NL','AN','NC','NZ','NI','NE','NG','NU','NF','MP','NO','OM','PK','PW','PS','PA','PG','PY','PE','PH','PN','PL','PT','PR','QA','RE','RO','RU','RW','BL','SH','KN','LC','MF','PM','VC','WS','SM','ST','SA','SN','RS','SC','SL','SG','SK','SI','SB','SO','ZA','GS','ES','LK','SD','SR','SJ','SZ','SE','CH','SY','TW','TJ','TZ','TH','TL','TG','TK','TO','TT','TN','TR','TM','TC','TV','UG','UA','AE','GB','US','UM','UY','UZ','VU','VE','VN','VG','VI','WF','EH','YE','ZM','ZW',
        );
            if($options['new']){
                $builder->add('filePhoto', FileType::class, [
                'label' => 'Choisissez la photo de profile (Optionnelle: elle peut être renseignée plus tard): ',
                'required' => false,
                'attr' => array(
                   'accept'=>'image/*',
                    'class' => 'fselect'
                )]);
            }else{
                $builder->add('filePhoto', FileType::class, [
                'label' => 'Choisissez la photo de profile (Optionnel: elle peut être renseignée plus tard): ',
                'required' => false,
                'attr' => array(
                   'accept'=>'image/*',
                    'class' => 'fselect'
                )]);
            }
        $builder
            ->add('nom', null, [
                'label' => 'Nom * : ',
                'required' => true,
            ])
            ->add('prenom', null, [
                'label' => 'Prénoms * : ',
                'required' => true,
            ])
            ->add('contacts', PhoneNumberType::class, array(
                'label' => 'Contact * : ',
                'required' => true,
                'widget' => PhoneNumberType::WIDGET_COUNTRY_CHOICE, 
                'country_choices' => $countries,
                'preferred_country_choices' => array('BJ'),
                ))
            ->add('contactsConfirmation', PhoneNumberType::class, array(
                'label' => 'Confirmer le contact * : ',
                'required' => true,
                'widget' => PhoneNumberType::WIDGET_COUNTRY_CHOICE, 
                'country_choices' => $countries,
                'preferred_country_choices' => array('BJ'),
                ))
            ->add('adresse', null, [
                'label' => 'Adresse précise * :',
                'required' => true,
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tontineBundle\Entity\Client',
            'new' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tontinebundle_client';
    }
}
