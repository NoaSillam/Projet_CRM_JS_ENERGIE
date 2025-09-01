<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationFormType extends AbstractType
{
    private RolesTransformer $rolesTransformer;

    public function __construct(RolesTransformer $rolesTransformer)
    {
        $this->rolesTransformer = $rolesTransformer;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', null, [
            'attr' => ['class' => 'form-control','style' => 'width: 300px;'],
        ])
        ->add('prenom', null, [
            'attr' => ['class' => 'form-control','style' => 'width: 300px;'],
        ])
            ->add('email', null, [
                'attr' => ['class' => 'form-control','style' => 'width: 300px;'],
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Télépro' => 'ROLE_USER',
                    'Commercial' => 'ROLE_USER_COMMERCIAL',
                    'Technicien' => 'ROLE_USER_TECHNICIEN',
                    'Role Admin' => 'ROLE_ADMIN',
                ],
                'expanded' => false,
                'multiple' => false, // Un seul choix autorisé
                'attr' => ['class' => 'form-control','style' => 'width: 300px;'],
                'data' => 'ROLE_USER', // Mettez la valeur par défaut sous forme de chaîne
                'label' => 'Roles',
            ])

            ->add('agreeTerms', CheckboxType::class, [
                
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['class' => 'form-control','style' => 'width: 300px;','autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
        $builder->get('roles')->addModelTransformer($this->rolesTransformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
