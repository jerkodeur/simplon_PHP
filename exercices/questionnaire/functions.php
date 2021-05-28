<?php

function showScore(): void
{
    $score = $_GET['result'] / $_GET['max'] * 100;

    for ($i = 0; $i < 5; $i++) {
        if ($score > 0 && $score >= $i * 20) {
            echo '⭐';
        } else {
            echo '⚫';
        }
    }
}

function split_string(int $num, string|int $string, $caract = '.'): string
{
    $split = str_split($string, $num);
    $transform_string = "";
    foreach ($split as $chunk) {
        $transform_string .= "$chunk$caract";
    }
    return remove_last_caract($transform_string);
}


function remove_last_caract(mixed $param)
{
    return substr($param, 0, -1);
}

function verify_phone(mixed $number): bool
{
    return preg_match('/0[0-9]{9}/', $number);
}
