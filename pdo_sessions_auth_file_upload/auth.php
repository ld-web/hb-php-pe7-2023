<?php

session_start();

require_once 'classes/AppError.php';
require_once 'classes/Utils.php';
require_once 'functions/db.php';

// Vérification de la présence des données
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    Utils::redirect('login.php');
}

// Extraction des données
[
    'email' => $email,
    'password' => $password
] = $_POST;

// Récupération de l'instance de PDO représentant la connexion entre notre application et la base de données
try {
    $pdo = getConnection();
} catch (PDOException) {
    Utils::redirect('login.php?error=' . AppError::DB_CONNECTION);
}

// 1er temps : je cherche si un utilisateur avec cette adresse email existe
$query = "SELECT * FROM users WHERE email = ?";

$connectStmt = $pdo->prepare($query);
$connectStmt->execute([$email]);

$user = $connectStmt->fetch();

// S'il n'existe pas, return early pattern : je retourne sur le login avec le message d'erreur approprié
if ($user === false) {
    Utils::redirect('login.php?error=' . AppError::USER_NOT_FOUND);
}

// Sinon (il existe), je dois procéder à la vérification du mot de passe
if (!password_verify($password, $user['password'])) {
    Utils::redirect('login.php?error=' . AppError::INVALID_CREDENTIALS);
}

// Si j'arrive à ce stade, alors cela signifie que tout roule (comme Hristina a si bien dit).
// Je peux donc procéder à l'authentification, dans le sens où je vais retenir que l'utilisateur
// est authentifié
// Ma session est déjà démarrée, donc je vais travailler avec $_SESSION
$_SESSION['userInfos'] = [
    'id' => $user['id'],
    'email' => $email
];

Utils::redirect('profile.php');
