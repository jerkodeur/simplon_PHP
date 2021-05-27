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

function remove_last_caract(string|int $param)
{
    return substr($param, 0, -1);
}

function split_string(int $num, string|int $string): string
{
    $split = str_split($string, $num);
    $transform_string = "";
    foreach ($split as $chunk) {
        $transform_string .= "$chunk.";
    }
    return remove_last_caract($transform_string);
}

function verify_phone(int $num): bool
{
    return preg_match('/0[0-9]{9}/', $_GET['phone']);
}
