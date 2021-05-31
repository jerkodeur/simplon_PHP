<?php
require('.env');

try {
    $dbh = new PDO("$db_type:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    var_dump($dbh);
    $query = $dbh->query(
        'SELECT user_login, user_email, LEFT(user_pass, 10)
        FROM wp_users'
    );
    foreach ($query as $row) {
        var_dump($row);
    }
}
// $dbh = null;
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
