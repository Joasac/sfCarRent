<?php

namespace App\Form;

use App\Entity\ContactType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Your Name',
                'attr' => ['placeholder' => 'Enter your name']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Your Email',
                'attr' => ['placeholder' => 'Enter your email']
            ])
            ->add('subject', TextType::class, [
                'label' => 'Subject',
                'attr' => ['placeholder' => 'Enter the subject of your message']
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => ['placeholder' => 'Enter your message']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactType::class,
        ]);
    }
}
