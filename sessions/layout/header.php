<?php
session_start();
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
}
if (!isset($_SESSION['pagesVisited'])) {
    $_SESSION['pagesVisited'] = 0;
}
$_SESSION['pagesVisited']++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site avec thème</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="<?php echo $_SESSION['theme']; ?>">
    <form action="switch_theme.php" method="POST">
        <button type="submit">
            Changer le thème
        </button>
        Pages visitées : <?php echo $_SESSION['pagesVisited']; ?>
    </form>