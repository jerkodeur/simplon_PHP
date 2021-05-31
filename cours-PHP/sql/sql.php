<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>

    <?php

    include('../../.env.php');
    var_dump($db_name);

    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        // Initialiser une nouvelle connexion à la base de donnée
        $dbh = new PDO("$db_type:host=$db_host;dbname=$db_name", $db_user, $db_pass, $options);

        $query = $dbh->query(
            'SELECT e.description, e.title, e.updated_at, c.title as c_title, u.name
            FROM episodes e
            JOIN courses c on c.id = e.course_id
            JOIN users u on c.user_id = u.id
            ORDER BY e.updated_at DESC
            LIMIT 5'
        );
        // Modifier le mode d'affichage des résultats
        $query->setFetchMode(PDO::FETCH_ASSOC); // FETCH_BOOTH / FETCH_OBJ / à tester
        // Récupération de tous les résultats
        $result = $query->fetchAll();
        // Libérer la mémoire de la requête
        $query->closeCursor();
        // var_dump($result);

        foreach ($result as $row) { ?>
            <h1><?= $row['title'] ?></h1>
            <p><?= $row['description'] ?></p>
            <small>Fait parti du cours <b><?= $row['c_title'] ?></b>, écrit par <b><?= $row['name'] ?></b></small>
    <?php }
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>

</body>

</html>