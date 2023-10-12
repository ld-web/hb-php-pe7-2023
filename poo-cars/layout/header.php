<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
  <title><?php echo $pageTitle ?? "Voitureland"; ?></title>
</head>
<body class="flex flex-col min-h-screen justify-between">
  <header>
    <?php require_once __DIR__ . "/nav.php"; ?>
  </header>
  <main class="prose mx-auto grow px-4 md:px-0">