<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="dist/output.css" />
  <title><?php echo $pageTitle ?? "Voitureland"; ?></title>
</head>
<body class="flex flex-col min-h-screen justify-between">
  <header>
    <?php require_once __DIR__ . "/nav.php"; ?>
  </header>
  <main class="prose mx-auto grow px-4 md:px-0">