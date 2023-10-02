<?php

function factorial(int $value): int
{
    if ($value === 0 || $value === 1) {
        return 1;
    }

    return $value * factorial($value - 1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorielle</title>
</head>
<body>
  <h1>Factorielle (récursive)</h1>
  <h2>Tests :</h2>

  <p>
    0 ==> <?php echo factorial(0); ?>
  </p>
  <p>
    10 ==> <?php echo factorial(10); ?>
  </p>
  <p>
    4 ==> <?php echo factorial(4); ?>
  </p>
  <p>
    1 ==> <?php echo factorial(1); ?>
  </p>
</body>
</html>