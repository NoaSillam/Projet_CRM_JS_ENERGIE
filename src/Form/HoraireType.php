<?php

namespace App\Form;

use App\Entity\Horaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HoraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('jj', null, [
                'label' => 'Jour',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('mm', null, [
                'label' => 'Mois',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('aa', null, [
                'label' => 'Année',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('cmb', ChoiceType::class, [
                'label' => 'Combien de rendez-vous',
                'choices'  => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                ],
                'placeholder' => 'Sélectionnez une option',
                'attr' => ['class' => 'form-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horaire::class,
        ]);
    }
}
