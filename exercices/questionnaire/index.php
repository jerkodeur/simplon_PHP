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

require('default.php');
