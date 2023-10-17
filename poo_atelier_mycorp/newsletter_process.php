<?php

require_once 'functions.php';
require_once 'functions/newsletter.php';
require_once 'classes/Utils.php';
require_once 'classes/Email.php';

// Return early pattern
// Situation désirée : la clé email est définie dans le tableau $_POST
// J'inverse donc cette condition
// et suis capable d'interrompre le script (ou rediriger, comme ici)
// beaucoup plus tôt
if (!isset($_POST['email'])) {
    Utils::redirect('newsletter.php');
}

// Si je me trouve ici, ça signifie que je n'ai pas redirigé
// Donc que j'ai bien une clé email dans $_POST
// 1 - Initialisations de variables
try {
    $email = new Email($_POST['email']);
} catch (InvalidArgumentException $e) {
    Utils::redirect("newsletter.php?error=" . $e->getCode());
}

$email = $_POST['email'];
$emailsFilePath = __DIR__ . '/emails.txt';
$spamDomainsFilePath = __DIR__ . '/spam_domains.txt';

// 2 - Validations

// Éviter les doublons
$emails = file($emailsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (in_array($email, $emails)) {
    Utils::redirect("newsletter.php?error=" . EMAIL_DUPLICATE . "&email=$email");
}

// Vérifier que le domaine n'est pas un spam
$emailDomain = ltrim(strstr($email, '@'), '@');
$spamDomains = file($spamDomainsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (in_array($emailDomain, $spamDomains)) {
    Utils::redirect("newsletter.php?error=" . EMAIL_SPAM . "&email=$email");
}

registerEmail($emailsFilePath, $email);
Utils::redirect('subscription_confirm.php?email=' . $email);
