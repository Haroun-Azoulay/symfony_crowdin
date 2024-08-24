<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProjectsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add(
                'targetLanguages', 
                ChoiceType::class, 
                [
                    'choices' => [
                        'French' => 'French',
                        'English' => 'English',
                        'Spanish' => 'Spanish',
                        'Italian' => 'Italian',
                        'Darija' => 'Darija',
                        'Tamazight' => 'Tamazight',
                    ],
                'multiple' => true,
                'expanded' => true
                ]
            )
            ->add('save', SubmitType::class, ['label' => 'Create Project'])
        ;
    }
}

