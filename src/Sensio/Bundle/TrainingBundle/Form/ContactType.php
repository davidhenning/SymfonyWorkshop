<?php

namespace Sensio\Bundle\TrainingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sender')
            ->add('subject')
            ->add('message', 'textarea')
        ;
    }

    public function getName()
    {
        return 'contact';
    }
}
