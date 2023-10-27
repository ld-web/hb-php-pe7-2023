<?php

require_once 'classes/Utils.php';
require_once 'classes/AppError.php';
require_once 'functions/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Utils::redirect('register.php');
}

// Si je me trouve là, ça veut dire que la méthode employée est POST
try {
    $pdo = getConnection();

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // --- FILE UPLOAD ---
    $profilePicture = $_FILES['profile-pic'];

    // Générer un nom unique
    $bytes = random_bytes(10);
    // À ce stade, on n'a pas l'extension de fichier
    $filename = bin2hex($bytes);
    // On extrait l'extension du fichier uploadé
    $profilePictureExt = pathinfo($profilePicture['name'], PATHINFO_EXTENSION);

    // On vient concaténer l'extension derrière notre nom de fichier généré
    $filename .= '.' . $profilePictureExt;
    // On peut donc finaliser la définition de la destination
    $destination = __DIR__ . '/uploads/profile_pictures/' . $filename;

    if (!is_uploaded_file($profilePicture['tmp_name']) || $profilePicture['error'] !== UPLOAD_ERR_OK) {
        Utils::redirect('register.php?error=' . AppError::REGISTER_FILE_UPLOAD);
    }

    if (!move_uploaded_file($profilePicture['tmp_name'], $destination)) {
        Utils::redirect('register.php?error=' . AppError::REGISTER_FILE_UPLOAD);
    }
    // --- FILE UPLOAD ---

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // --- ATTENTION, NON SÉCURISÉ ---
    // $query = "INSERT INTO users (`last_name`, `first_name`, `email`, `password`) VALUES ('$name', '$firstname', '$email', '$hashedPassword')";
    // 1 - J'exécute ma requête
    // $stmt = $pdo->query($query);
    // --- INJECTION SQL POSSIBLE ---

    // 1 - Je prépare ma requête
    $query = "INSERT INTO users (`last_name`, `first_name`, `email`, `password`, `profile_pic`) VALUES (:nom, :firstname, :email, :hashedPassword, :profilePic)";
    $stmtInsert = $pdo->prepare($query);
    // 2 - J'exécute mon statement préparé
    $stmtInsert->execute([
        'nom' => $name,
        'firstname' => $firstname,
        'email' => $email,
        'hashedPassword' => $hashedPassword,
        'profilePic' => $filename
    ]);

    echo "Inscription effectuée";
} catch (PDOException) {
    Utils::redirect('register.php?error=' . AppError::DB_CONNECTION);
}
