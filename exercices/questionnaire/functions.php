<?php

function showScore(): void
{
    $star = '⭐';
    $empty = '⚫';
    $score = $_GET['result'] / 6 * 100;

    for ($i = 0; $i < 5; $i++) {
        if ($score > 0 && $score >= $i * 20) {
            echo $star;
        } else {
            echo $empty;
        }
    }
}
