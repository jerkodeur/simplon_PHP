<?php
// Exercice : Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
$sentence = "le chat est mort"; //devient : leChatEstMort

function transform_in_camelcase_1(string $sentence): string
{
    // Divise la phrase en un tableau de mots grâce au séparateur
    $words = explode(' ', $sentence);
    // Pour chaque élément du tableau:
    foreach ($words as $index => $word) {
        // Si ce n'est pas le premier mot qui est affiché, je met en majuscule la première lettre
        if ($index != 0) $words[$index] = ucfirst($word);
    }
    // Je retourne les éléménts de mon tableau convertit en string
    return implode($words);
}

function transform_in_camelcase_2(string $sentence): string
{
    return lcfirst(str_replace(' ', '', ucwords($sentence)));
}

echo 'Solution 1 => implode => ' . transform_in_camelcase_1($sentence) . '<br>';
echo 'Solution 2 => ucWords => ' . transform_in_camelcase_2($sentence) . '<br>';
