<?php

session_start();
require('env.php');

try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

function getAllProjects() {
    global $pdo;

    $projets = $pdo->query('SELECT * FROM projets');

    return $projets->fetchAll();

}