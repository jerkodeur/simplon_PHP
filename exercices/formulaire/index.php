<?php

require 'service/verif_form.php';
require 'functions.php';

if (!$_POST) {
    $inc = 'layout/form.php';
} else {
    $errors = check_form($_POST);
    if ($errors !== []) {
        $inc = 'layout/form.php';
    } else {
        $score = $_POST['question_1'] + $_POST['question_2'] + $_POST['question_3'];
        $phone = $_POST['phone'];
        $inc = 'layout/validationForm.php';
    }
}

require 'layout/default.php';
