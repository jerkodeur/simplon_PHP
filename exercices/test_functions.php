<?php
// Exercice : Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
$sentence = "le chat est mort"; //devient : leChatEstMort

function transform_in_camelcase_1(string $param): string
{
    $words = explode(' ', $param);
    foreach ($words as $index => $word) {
        if ($index != 0) $words[$index] = ucfirst($word);
    }
    return implode($words);
}

function transform_in_camelcase_2(string $param): string
{
    $upperFirstWordLetter = str_replace(' ', '', ucwords($param));
    return strtolower($upperFirstWordLetter[0]) . substr($upperFirstWordLetter, 1);
}

echo 'Solution 1 => implode => ' . transform_in_camelcase_1($sentence) . '<br>';
echo 'Solution 2 => ucWords => ' . transform_in_camelcase_2($sentence) . '<br>';
