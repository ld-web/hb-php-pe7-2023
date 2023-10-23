<?php

function getConnection(): PDO
{
    $dsn = 'mysql:host=172.18.0.1;port=3640;dbname=hb_pdo_pe7;charset=utf8mb4';
    $user = 'hb_pdo_pe7';
    $password = '(OS(-HshCjYc_4zD';

    return new PDO($dsn, $user, $password, [
        // Je définis le mode d'erreur à Exception : PDO lancera une exception en cas d'erreur
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        // Je définis le mode de lecture des résultats de requête à un tableau associatif : à chaque fois que je ferai un $stmt->fetch() ou bien $stmt->fetchAll(), PDO me retournera automatiquement un tableau associatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}
