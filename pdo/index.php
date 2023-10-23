<?php

require_once 'functions/db.php';

$pdo = getConnnection();

var_dump($pdo);

// Soit un PDOStatement, soit false
$stmt = $pdo->query("SELECT * FROM users");

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

// --- Récupère tous les résultats d'un coup
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($users);

// --- Lit les résultats un par un (curseur)
while ($row = $stmt->fetch()) {
    var_dump($row);
    echo $row['first_name'] . " " . $row['last_name'] . "<br />";
}
