<?php

namespace Security\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterFormType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('email', 'email', array('label' => 'Email address', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Confirm Password'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('full_name','text', [
                'required' => false
            ])
            ->add('phone','text', [
                'required' => false
            ]);

        $builder->remove('username');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Security\\UserBundle\\Entity\\User'
        ));
    }

    public function getName()
    {
        return 'registration_form';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

}