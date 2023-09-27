<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    // 1 - Version avec if
    // if (isset($title)) {
    //     echo $title;
    // } else {
    //     echo "MyCorp";
    // }
    // 2 - Version ternaire
    // echo isset($title) ? $title : "MyCorp";
    // 3 - Opérateur null coalescent "??"
    echo $title ?? "MyCorp";
    ?>
  </title>
  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body>

<header>
  <?php require_once 'nav.php'; ?>
</header>