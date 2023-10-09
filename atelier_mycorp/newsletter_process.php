<?php

require_once 'functions.php';

// Return early pattern
// Situation désirée : la clé email est définie dans le tableau $_POST
// J'inverse donc cette condition
// et suis capable d'interrompre le script (ou rediriger, comme ici)
// beaucoup plus tôt
if (!isset($_POST['email'])) {
    redirect('newsletter.php');
}

// Si je me trouve ici, ça signifie que je n'ai pas redirigé
// Donc que j'ai bien une clé email dans $_POST
// 1 - Initialisations de variables
$email = $_POST['email'];
$emailsFilePath = __DIR__ . '/emails.txt';
$spamDomainsFilePath = __DIR__ . '/spam_domains.txt';

// 2 - Validations

// S'assurer que l'email n'est pas vide
if (empty($email)) {
    redirect("newsletter.php?error=L'email est obligatoire");
}

// Valider le format de l'adresse email
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    redirect("newsletter.php?error=Le format de l'email est incorrect");
}

// Éviter les doublons
$emails = file($emailsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (in_array($email, $emails)) {
    redirect("newsletter.php?error=L'email existe déjà dans la newsletter");
}

// Vérifier que le domaine n'est pas un spam
$emailDomain = ltrim(strstr($email, '@'), '@');
$spamDomains = file($spamDomainsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (in_array($emailDomain, $spamDomains)) {
    redirect("newsletter.php?error=Désolé, cet email n'est pas accepté dans notre newsletter");
}

$emailsFile = fopen($emailsFilePath, 'a');
fwrite($emailsFile, $email . PHP_EOL);
fclose($emailsFile);
redirect('subscription_confirm.php?email=' . $email);
