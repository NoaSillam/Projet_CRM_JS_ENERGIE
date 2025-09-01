<?php
//
//namespace App\Form;
//
//use App\Entity\Lead;
//use App\Entity\Users;
//use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
//use Symfony\Component\Validator\Constraints\File;
//
//
//class LeadExcelType extends AbstractType
//{
//    public function buildForm(FormBuilderInterface $builder, array $options): void
//    {
//        $builder
//        ->add('excelFile', FileType::class, [
//            'label' => 'Fichier Excel',
//            'constraints' => [
//                new File([
//                    'mimeTypes' => [
//                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
//                        'application/vnd.ms-excel',
//                    ],
//                    'mimeTypesMessage' => 'Please upload a valid Excel file',
//                ])
//            ],
//        ]);
//    }
//
//    public function configureOptions(OptionsResolver $resolver): void
//    {
//        $resolver->setDefaults([
//            'data_class' => null,
//        ]);
//    }
//}


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class LeadExcelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('excelFile', FileType::class, [
                'label' => 'Fichier Excel',
                'label_attr' => ['class' => 'form-label mt-3 custom-label',
                    'style' => 'color: black; font-weight : bold; text-align : center; margin-left: 45%;',],
                'attr' => [
                    'class' => 'form-control', // Ajoute la classe Bootstrap pour les champs de formulaire
                ],

                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            'application/vnd.ms-excel',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Excel file',
                    ])
                ],
                'help' => 'Sélectionnez un fichier Excel valide (.xlsx, .xls)',
                'help_attr' => ['class' => 'form-text text-muted'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
