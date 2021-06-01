<?php

include('service/connexion.php');

function fetchData(string $query, array $params = [])
{
    $db = getConnexion();
    try {
        //? Appeler PDO::prepare() et PDOStatement::execute() pour les requêtes qui doivent être exécutées plusieurs fois avec différentes valeurs de paramètres optimisent les performances de votre application en autorisant le pilote à négocier coté client et/ou serveur avec le cache des requêtes et les meta-informations.
        $query = $db->prepare($query);
        //? De plus appeler PDO::prepare() et PDOStatement::execute() aident à prévenir les attaques par injection SQL en éliminant le besoin de protéger les paramètres manuellement.
        // Préparer la requête pour éviter les injections sql
        foreach ($params as $key => $value) {
            $query->bindParam(":$key", $value[0], $value[1]);
        }
        $query->execute();
        // Modifier le mode d'affichage des résultats
        $query->setFetchMode(PDO::FETCH_ASSOC); // FETCH_BOOTH / FETCH_OBJ / à tester
        // Récupération de tous les résultats
        $result = $query->fetchAll();
        // Libérer la mémoire de la requête
        $query->closeCursor();
        $db = null;
        return $result;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br />";
        die();
    }
}

function findAll(string $table)
{
    $query = "SELECT * from $table LIMIT 5";
    return fetchData($query);
}

function findOne(int $id, string $table)
{
    $query = "SELECT * from $table WHERE id = :id";
    return fetchData($query, ['id' => [$id, PDO::PARAM_INT]])[0];
}

function findAllByOne(string $table, string $param, $id)
{
    $query = "SELECT * from $table WHERE $param = :id";
    return fetchData($query, ['id' => [$id, PDO::PARAM_INT]]);
}

function findAllCourses()
{
    $query = ("SELECT c.*, u.name as user
        FROM courses c
        JOIN users u ON u.id = c.user_id
        LIMIT 6
    ");
    return fetchData(($query));
}
