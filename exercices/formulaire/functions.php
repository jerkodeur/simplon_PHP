<?php

function displayScore($score = 0): void
{
    $percent = $score / 5 * 100;

    for ($i = 0; $i < 5; $i++) {
        if ($percent > 0 && $percent >= $i * 20) {
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
