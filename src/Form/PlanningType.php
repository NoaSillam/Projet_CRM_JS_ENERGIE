<?php

namespace App\Form;

use App\Entity\Lead;
use App\Entity\Planning;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PlanningType extends AbstractType
{
//    public function buildForm(FormBuilderInterface $builder, array $options): void
//    {
//        $lead = $options['lead'];
//
//        $builder
//            ->add('date', null, [
//                'widget' => 'single_text',
//                'attr' => ['class' => 'form-control','style' => 'width: 500px;'],
//                'label_attr' => [
//                'class' => 'custom-label', // Ajoutez votre classe personnalisée pour les labels
//                'style' => 'color: black; font-weight : bold; text-align : center;  margin-left: 45%;', // Ajoutez des styles CSS personnalisés pour les labels
//            ],
//            ]
//            )
//            ->add('commentaire', null, [
//                'attr' => [
//                    'required' => false,
//                    'class' => 'form-control commentaire-field tinymce',
//                    'style' => 'width: 500px;',
//                    'cols' => '50',
//                    'rows' => '10',
//                ],
//                'label_attr' => [
//                'class' => 'custom-label', // Ajoutez votre classe personnalisée pour les labels
//                'style' => 'color: black; font-weight : bold; text-align : center;  margin-left: 45%; margin-top: 20px;', // Ajoutez des styles CSS personnalisés pour les labels
//            ],
//            ])
//            ->add('adresse', TextType::class, [
//                'attr' => [
//                    'class' => 'autocomplete-address form-control','style' => 'width: 500px;'
//                ],
//                'label_attr' => [
//                'class' => 'custom-label', // Ajoutez votre classe personnalisée pour les labels
//                'style' => 'color: black; font-weight : bold; text-align : center;  margin-left: 45%; margin-top: 20px;', // Ajoutez des styles CSS personnalisés pour les labels
//            ],
//            ])
//             ->add('id_lead', EntityType::class, [
//                 'class' => Lead::class,
//                 'choice_label' => 'id',
//                 'data' => $lead,
//             ])
//        ;
//    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $lead = $options['lead'];

        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Nom'
            ])
            ->add('prenom', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Prénom'
            ])

            ->add('ageMRMME', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Âge MR/MME'
            ])
            ->add('telephone', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Téléphone'
            ])
            ->add('email', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'email'
            ])
            ->add('adresse', TextType::class, [
                'attr' => [
                    'class' => 'autocomplete-address form-control', 'style' => 'color:black; margin-bottom: 20px; text-align:center;'
                ],
                'label_attr' => [
                    'class' => 'custom-label',
                    'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;',
                ],
            ])

            ->add('situationFamiliale', ChoiceType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Situation familiale',
                'choices'  => [
                                'Célibataire' => 'celibataire',
                                'Marié(e)' => 'marie',
                                'Divorcé(e)' => 'divorce',
                                'Veuf(ve)' => 'veuf',
                                'Pacsé(e)' => 'pacse',
                            // ajoute d'autres options si besoin
                              ],
                'placeholder' => 'Sélectionner une situation',
            ])

            ->add('situationPro', ChoiceType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Situation professionnelle',
                'choices'  => [
                                'CDI' => 'CDI',
                                'CDD' => 'CDD',
                                'Auto-entrepreuneur' => 'Auto-entrepreuneur',
                                'Retraité' => 'Retraite',
                                'Sans-emploi' => 'Sans-emploi',
                             // ajoute d'autres options si besoin
                             ],
                'placeholder' => 'Sélectionner une situation',
            ])

            ->add('nbrePersonneCharge', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Nombre de personne à charge'
            ])

            ->add('salaireMensuel', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Salaire mensuel'
            ])
            ->add('creditEnCours', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Crédit en cours'
            ])
            ->add('RevenuFiscalReference', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Revenu fiscal de référence'
            ])
            ->add('ageMaison', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Âge de la maison'
            ])
            ->add('consommationAnnuelOuMensuelle', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Consommation annuelle ou mensuelle'
            ])
            ->add('TypeChauffage', TextType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Type de chauffage'
            ])
            ->add('ageChaudiere', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Âge de la chaudière'
            ])
            ->add('superficieMursExt', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Superficie des murs extérieure'
            ])
            ->add('superficieMaison', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Superficie de la maison'
            ])
            ->add('matiereMursExt', ChoiceType::class, [
                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
                'label_attr' => ['class' => 'custom-label', 'style' => 'color: black; font-weight: bold;'],
                'label' => 'Matière des murs extèrieure',
                'choices'  => [
                    'Brique' => 'brique',
                    'Pierre' => 'pierre',
                    'Béton (parpaing ou béton banché)' => 'beton',
                    'Bloc béton cellulaire' => 'bloc-beton-cellulaire',
                    'Bois' => 'bois',
                    'Enduit sur isolation' => 'ITE',
                    'Crépi' => 'crepi',
                    'Bardage bois, PVC ou composite' => 'bardage-bois',
                    'Mur rideau' => 'mur-rideau',
                    // ajoute d'autres options si besoin
                ],
                'placeholder' => 'Sélectionner une situation',
            ])

//            ->add('date', null, [
//                'widget' => 'single_text',
//                'attr' => ['class' => 'form-control', 'style' => 'color:black; text-align:center;'],
//                'label_attr' => [
//                    'class' => 'custom-label', 'style' => 'color: black; font-weight: bold;',
//                ],
//            ])


->add('date', DateTimeType::class, [
        'widget' => 'choice', // Utiliser des listes déroulantes pour date et heure
        'attr' => [
            'class' => 'form-control',
            'style' => 'color:black; text-align:center;',
        ],
        'years' => range(2025, 2040), // Restreindre les années à partir de 2024
        'hours' => [10, 11, 12, 13, 14, 15, 16, 17, 18], // Limite les heures disponibles
        'minutes' => [0, 30], // Limite les minutes disponibles (00 ou 30)
        'label_attr' => [
            'class' => 'custom-label',
            'style' => 'color: black; font-weight: bold;',
        ],
        'date_format' => 'yyyy-MM-dd', // Format de la date (année, mois, jour)
    ])

        ->add('commentaire', null, [
                'attr' => [
                    'required' => false,
                    'class' => 'form-control commentaire-field tinymce',
                    'style' => 'width: 500px;',
                    'cols' => '50',
                    'rows' => '10',
                ],
                'label_attr' => [
                    'class' => 'custom-label',
                    'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%; margin-top: 20px;',
                ],
            ])


            ->add('id_lead_hidden', HiddenType::class, [
                'data' => $lead ? $lead->getId() : null,
                'mapped' => false,
            ])






//            ->add('id_lead', EntityType::class, [
//                'class' => Lead::class,
//                'choice_label' => 'nom_complet',
//                'label' => 'Nom et prénom',
//                'data' => $lead,
//                'attr' => ['disabled' => true, 'class' => 'form-control', 'style' => 'width: 500px;'],
//                'required' => false, // Si vous souhaitez que ce champ ne soit pas obligatoire
//            ])


        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Planning::class,
            'lead' => null,
        ]);
    }
}
