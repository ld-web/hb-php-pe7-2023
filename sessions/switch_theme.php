<?php

// Crée ou récupère la session en cours
session_start();

$currentTheme = $_SESSION['theme'];
$_SESSION['theme'] = ($currentTheme === 'dark') ? 'light' : 'dark';

header('Location: index.php');
exit;
