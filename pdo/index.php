<?php

try {
    $pdo = new PDO(
        "mysql:host=172.18.0.1;port=3640;dbname=hb_pdo_pe7;charset=utf8mb4",
        "hb_pdo_pe7",
        "(OS(-HshCjYc_4zD"
    );
} catch (PDOException) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

var_dump($pdo);

// Soit un PDOStatement, soit false
$stmt = $pdo->query("SELECT * FROM users");

if ($stmt === false) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// --- Récupère tous les résultats d'un coup
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($users);

// --- Lit les résultats un par un (curseur)
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo $row['first_name'] . " " . $row['last_name'] . "<br />";
}
