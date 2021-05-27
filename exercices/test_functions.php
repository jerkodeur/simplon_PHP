<?php


// Exercice 1 : afficher le plus petit nombre
$a = 10;
$b = 20;

echo "<u>Exercice 1</u> : <b>afficher le plus petit nombre: </b>" . min($a, $b);

echo "<hr>";

// Exercice 2 : afficher la table de 9 (opération + résultat)
echo "<u>Exercice 2</u> : <b>afficher la table de 9 (opération + résultat)</b><br><br>";

function MultiplicationTable(int $number): void
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$number * $i => " . $i * $number . "<br>";
    }
}
MultiplicationTable(9);

echo "<hr>";

// Exercice 3 : compter à rebours
echo "<u>Exercice 3</u> : <b>compter à rebours</b> <br><br>";

function ReverseCount(int $number): void
{
    while ($number >= 0) {
        echo $number . "..";
        $number--;
    }
}

ReverseCount(10);

echo "<hr>";

// Exercice 4 : Ecrire une boucle qui produit une ligne horizontale de 8 étoiles
echo "<u>Exercice 4</u> : <b>Ecrire une boucle qui produit une ligne horizontale de 8 étoiles</b> <br><br>";

function ShowCaracter(int|string $caract, int $loop): void
{
    for ($i = 0; $i < $loop; $i++) {
        echo $caract;
    }
}

ShowCaracter('⭐', 8);

echo "<hr>";

// Exercice 5 : Afficher un figure de 8 étoiles sur 8.
echo "<u>Exercice 5</u> : <b>Afficher un figure de 8 étoiles sur 8</b> <br><br>";

function ShowFigure(int $width, int $height, string|int $caract): void
{
    for ($i = 0; $i < $height; $i++) {
        ShowCaracter($caract, $width);
        echo "<br>";
    }
}

ShowFigure(8, 8, '⭐');

echo "<hr>";

// Exercice 6 : Ecrire une fonction (utilisant une boucle) qui remplace tout les espaces d'une phrase par un underscore
echo "<u>Exercice 6</u> : <b>Ecrire une fonction (utilisant une boucle) qui remplace tout les espaces d'une phrase par un underscore</b> <br><br>";

function ReplaceCharacter(string|int $caract, string $sentence): string
{
    $newString = '';
    $splitString = str_split($sentence);
    foreach ($splitString as $index => $letter) {
        $newString .= $letter == ' ' ? '_' : $letter;
    }
    return $newString;
}
echo "With a craft function: ";
echo ReplaceCharacter(' ', 'Here is a sentence where the space had been replaced by an underscore') . '<br>';

echo "With an existing php function: ";
echo str_replace(' ', '_', 'Here is a sentence where the space had been replaced by an underscore');

echo "<hr>";

// Exercice 7 : Ecrire une fonction (utilisant une boucle) qui inverse et affiche l'ordre des lettres d'un mot
echo "<u>Exercice 7</u> : <b>Ecrire une fonction (utilisant une boucle) qui inverse et affiche l'ordre des lettres d'un mot</b> <br><br>";

function ReverseWordLetters(string $sentence): void
{
    for ($i = strlen($sentence); $i >= 0; $i--) {
        echo $sentence[$i];
    }
}

echo "With a craft function: ";
echo ReverseWordLetters('reverse') . '<br>';

echo "With an existing php function: ";
echo strrev('reverse');

echo "<hr>";

// Exercice : Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
echo "<u>Exercice 8</u> : <b>Ecrire une fonction qui supprime les espaces et met la phrase en camelCase</b> <br><br>";

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
