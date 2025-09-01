<?php

namespace App\Form;

use App\Entity\Bath;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType as SymfonyFileType; // Utilisation d'un alias pour éviter les conflits
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints as Assert;

class BathType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
            ])
            ->add('prenom', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
            ])
            ->add('codePostal', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
                'label' => 'code Postal',
            ])
            ->add('departement', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
            ])
            ->add('telephone', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
            ])
            ->add('revenu', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
            ])
            ->add('metreCarre', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;'],
                'label' => 'metre Carre',
                ])
            ->add('menage', ChoiceType::class, [
                'choices' => [
                    'Ménages très modestes' => 'MTM',
                    'Ménages modestes' => 'MM',
                    'Ménages aux revenus intermédiaires' => 'MARI',
                    'Ménages aux revenus les plus élevés' => 'MARLPLE',
                ],
                'label' => 'Ménage',
                'placeholder' => 'Choisir un ménage',
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45.1%;'],
            ])
            ->add('isolation', ChoiceType::class, [
                'choices' => [
                    'ITE' => 'ITE',
                    'PAC' => 'PAC',
                    'Comble' => 'Comble',
                ],
                'label' => 'Isolation',
                'placeholder' => 'Choisir un type d\'isolation ',
                'attr' => ['class' => 'form-control', 'style' => 'color:black; margin-bottom: 20px;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45.1%;'],
            ])
            ->add('pieceIdentite', SymfonyFileType::class, [
                'attr' => ['class' => 'form-control-file', 'style' => 'margin-bottom: 20px;'],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'image/gif',
                            'image/jpg',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format valide',
                    ]),
                ],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-right: 3%; display: block;'],
                'label' => 'piece Identite',
                ])
            ->add('livretFamille', SymfonyFileType::class, [
                'attr' => ['class' => 'form-control-file', 'style' => 'margin-bottom: 20px;'],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'image/gif',
                            'image/jpg',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format valide',
                    ]),
                ],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-right: 3%; display: block;'],
                'label' => 'livret Famille',
                ])
            ->add('avisImpots', SymfonyFileType::class, [
                'attr' => ['class' => 'form-control-file', 'style' => 'margin-bottom: 20px;'],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'image/gif',
                            'image/jpg',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format valide',
                    ]),
                ],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-right: 3%; display: block;'],
                'label' => 'avis Impots',

                ])
            ->add('taxeFonciere', SymfonyFileType::class, [
                'attr' => ['class' => 'form-control-file', 'style' => 'margin-bottom: 20px;'],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'image/gif',
                            'image/jpg',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format valide',
                    ]),
                ],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-right: 3%; display: block;'],
                'label' => 'taxe Fonciere',
                ])
            ->add('preconisationTravaux', SymfonyFileType::class, [
                'attr' => ['class' => 'form-control-file', 'style' => 'margin-bottom: 20px;'],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'image/gif',
                            'image/jpg',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format valide',
                    ]),
                ],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-right: 0.5%; display: block;'],
                'label' => 'preconisation Travaux',
                ])
            ->add('dpe', SymfonyFileType::class, [
                'attr' => ['class' => 'form-control-file', 'style' => 'margin-bottom: 20px;'],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'application/pdf',
                            'image/png',
                            'image/webp',
                            'image/gif',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier au format valide',
                    ]),
                ],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight : bold; text-align : center; margin-right: 3%; display: block;'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bath::class,
        ]);
    }
}
