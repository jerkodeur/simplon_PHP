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
