<?php

namespace App\Form;

use App\Entity\CarReserve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarReserveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullname')
            ->add('email')
            ->add('mobileNumber')
            ->add('carType')
            ->add('duration')
            ->add('pickupDate')
            ->add('pickupTime', null, [
                'widget' => 'single_text',
            ])
            ->add('specialRequest')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CarReserve::class,
        ]);
    }
}
