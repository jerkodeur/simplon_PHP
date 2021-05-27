<?php

// TODO: Rendre dynamique l'affichage des questions
// include('question_list.php');
// foreach ($questions as $index => $question) {
//     foreach (array_values($question) as $item_index => $item) {
//         echo "$item_index => $item" . "<br>";
//     }
// }

include('functions.php');

$numQuestion = explode('_', $_GET['page'])[1];
$nextPage = "question_" . $numQuestion + 1;
$score = $_GET['result'];
$maxPoints = $_GET['max'];

// determine which page to display
$page = $_GET['page'];

if ($page == 'end') {
    $inc = 'layout/end.php';
} elseif (str_contains($page, 'question')) {
    $inc = "layout/question_" . $numQuestion . ".php";
} elseif ($page == 'recall') {
    $inc = "layout/not_resolved.php";
} else {
    $inc = 'layout/start.php';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET" />
    <meta name="author" content="Camile Ghastine" />

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>
        <?php
        include($inc);
        ?>
    </div>
</body>

</html>