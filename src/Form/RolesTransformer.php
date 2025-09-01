<?php
// src/Form/RolesTransformer.php
// namespace App\Form;

// use Symfony\Component\Form\DataTransformerInterface;

// class RolesTransformer implements DataTransformerInterface
// {
//     public function transform($value)
//     {
//         // Transformez le tableau en une chaîne pour l'affichage dans le formulaire
//         return is_array($value) ? reset($value) : $value;
//     }

//     public function reverseTransform($value)
//     {
//         // Transformez la chaîne en un tableau
//         return is_string($value) ? [$value] : $value;
//     }
// }


// src/Form/RolesTransformer.php
namespace App\Form;

use Symfony\Component\Form\DataTransformerInterface;

class RolesTransformer implements DataTransformerInterface
{
    /**
     * Transforms an array to a string.
     *
     * @param mixed $value The value in the original representation
     *
     * @return mixed The value in the transformed representation
     */
    public function transform(mixed $value): mixed
    {
        // Transform the array to a string for display in the form
        return is_array($value) ? reset($value) : $value;
    }

    /**
     * Transforms a string to an array.
     *
     * @param mixed $value The value in the transformed representation
     *
     * @return mixed The value in the original representation
     */
    public function reverseTransform(mixed $value): mixed
    {
        // Transform the string to an array
        return is_string($value) ? [$value] : $value;
    }
}


