<?php

require_once 'classes/Utils.php';
require_once 'classes/AppError.php';
require_once 'functions/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Utils::redirect('register.php');
}

// Si je me trouve là, ça veut dire que la méthode employée est POST
try {
    $pdo = getConnnection();

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // --- ATTENTION, NON SÉCURISÉ ---
    // $query = "INSERT INTO users (`last_name`, `first_name`, `email`, `password`) VALUES ('$name', '$firstname', '$email', '$hashedPassword')";
    // 1 - J'exécute ma requête
    // $stmt = $pdo->query($query);
    // --- INJECTION SQL POSSIBLE ---

    // 1 - Je prépare ma requête
    $stmtInsert = $pdo->prepare("INSERT INTO users (`last_name`, `first_name`, `email`, `password`) VALUES (:nom, :firstname, :email, :hashedPassword)");
    // 2 - J'exécute mon statement préparé
    $stmtInsert->execute([
        'nom' => $name,
        'firstname' => $firstname,
        'email' => $email,
        'hashedPassword' => $hashedPassword
    ]);

    echo "Inscription effectuée";
} catch (PDOException) {
    Utils::redirect('register.php?error=' . AppError::DB_CONNECTION);
}
