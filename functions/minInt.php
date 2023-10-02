<?php

function minInt(int $a, int $b, int $c): int
{
    if ($a < $b && $a < $c) {
        return $a;
    } elseif ($b < $a && $b < $c) {
        return $b;
    }

    return $c;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Fonction qui retourne le plus petit entier parmi 3</h1>
  <h2>Tests :</h2>
  <div>
    <p>
      3, 5, 8 ==> <?php echo minInt(3, 5, 8); ?>
    </p>
    <p>
      30, 5, 45 ==> <?php echo minInt(30, 5, 45); ?>
    </p>
    <p>
      1, 0, 87 ==> <?php echo minInt(1, 0, 87); ?>
    </p>
  </div>
</body>
</html>