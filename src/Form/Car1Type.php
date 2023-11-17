<?php

namespace App\Form;

use App\Entity\Car;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Car1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', TextType::class, [
                'required' => false,
            ])
            ->add('price', IntegerType::class, [
                'required' => false,
            ])
            ->add('fuel', TextType::class, [
                'required' => false,
            ])
            ->add('content', TextType::class, [
                'required' => false,
            ])
            ->add('user' , TextType::class, [
                'required' => false,
            ])
            ->add('category', TextType::class, [
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
