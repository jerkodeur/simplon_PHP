<?php

require('functions.php');

$numQuestion = explode('_', $_GET['page'])[1];
$nextPage = "question_" . $numQuestion + 1;
$score = $_GET['result'];
$maxPoints = $_GET['max'];

// determine which page to display
if (!$_GET['page']) $_GET['page'] = 'start';
$page = str_contains($_GET['page'], 'question') ? "view/question_" . $numQuestion . ".php" : "view/" . $_GET['page'] . ".php";

require('view/default.php');
