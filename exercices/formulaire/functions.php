<?php

function check_form(array $post): array
{
    $errors = [];
    // lastname
    if ($post['lastname'] == null) {
        $errors['lastname'] = '* Ce champ doit être renseigné';
    } elseif (strlen($post['lastname']) < 2) {
        $errors['lastname'] = '* Le prénom doit comporter au moins 2 caractères';
    }
    // firstname
    if ($post['firstname'] == null) {
        $errors['firstname'] = '* Ce champ doit être renseigné';
    } elseif (strlen($post['firstname']) < 2) {
        $errors['firstname'] = '* Le nom doit comporter au moins 2 caractères';
    }
    // phone number
    if ($post['phone'] == null) {
        $errors['phone'] = '* Ce champ doit être renseigné';
    } elseif (!verify_format($post['phone'], '0[0-9]{9}')) {
        $errors['phone'] = '* Le numéro de téléphone est invalide';
    }
    // date
    if ($post['date'] == null) {
        $errors['date'] = '* Ce champ doit être renseigné';
    } else {
        $store_date = explode('-', $post['date']);
        $store_date = array_reverse($store_date);

        if (!verify_format(implode('/', $store_date), '^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$')) {
            $errors['date'] = '* Le format de la date est invalide (jj/mm/aaaa)';
        }
    }
    return $errors;
}

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

function verify_format(mixed $string, string $regex): bool
{
    $regex = '/' . $regex . '/';
    return preg_match($regex, $string);
}
