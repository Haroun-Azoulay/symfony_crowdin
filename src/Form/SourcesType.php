<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class SourcesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('content', TextareaType::class, [
            'attr' => ['class' => 'form--content', 'rows' => 6], 
            'label' => 'Content',
        ])
            ->add('save', SubmitType::class, ['label' => 'Create Source'])
        ;
    }
}

