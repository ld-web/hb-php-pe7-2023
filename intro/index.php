<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduction PHP</title>
</head>
<body>
  <h1>Bienvenue !</h1>
  <h2><?php echo "Que voulez-vous manger aujourd'hui ?"; ?></h2>
  <?php
  $age = 21;
  echo '$age = 21';
  var_dump($age);
  $age = $age + 1;
  echo '$age = $age + 1';
  var_dump($age);
  $age += 1;
  echo '$age += 1';
  var_dump($age);
  $age++;
  echo '$age++';
  var_dump($age);
  echo 'var_dump(++$age)';
  var_dump(++$age);

  // int, string, float, bool, array
  $name = 'Christopher Spencer'; // string
  $price = 49.99; // float
  $isAuthorized = false; // bool

  const SOFTWARE_VERSION = "1.0.0";
  const HTML_BR = "<br />";

  echo $name . ' - ' . SOFTWARE_VERSION . HTML_BR;
  echo 'Le prix est de ' . $price . '€';
  ?>
</body>
</html>