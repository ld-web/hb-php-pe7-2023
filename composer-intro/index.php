<?php

require_once 'vendor/autoload.php';

// require_once 'vendor/symfony/dotenv/Dotenv.php';
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

var_dump($_ENV);

$dotenv->loadEnv(__DIR__ . '/.env');

var_dump($_ENV);

[
    'DB_HOST' => $host,
    'DB_PORT' => $port,
    'DB_NAME' => $name,
    'DB_CHARSET' => $charset,
    'DB_USER' => $user,
    'DB_PASSWORD' => $password
] = $_ENV;

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$name;charset=$charset";
    $pdo = new PDO($dsn, $user, $password);
    var_dump($pdo);
} catch (PDOException $e) {
    echo $e->getMessage();
}
