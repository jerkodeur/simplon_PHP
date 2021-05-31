<?php

$user = 'jerkoder';
$pass = 'JP93@s12RT77';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=wordpress_siberian', $user, $pass);
    var_dump($dbh);
    $query = $dbh->query('SELECT * from wp_users');
    echo "<pre>";
    foreach ($query as $row) {
        print_r($row);
    }
    echo "</pre>";
}
// $dbh = null;
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
