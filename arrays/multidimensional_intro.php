<?php
// Product : name, price, weight, discount (bool)
$products = [
  [
    'name'     => 'Captured',
    'price'    => 4368.56,
    'weight'   => 68,
    'discount' => true
  ],
  [
    'name'     => 'Knowledge',
    'price'    => 6646.5,
    'weight'   => 17,
    'discount' => false
  ],
  [
    'name'     => 'Cry',
    'price'    => 16000.30,
    'weight'   => 31,
    'discount' => false
  ],
  [
    'name'     => 'Habit',
    'price'    => 3619.56,
    'weight'   => 89,
    'discount' => true
  ],
  [
    'name'     => 'Picture',
    'price'    => 12671.03,
    'weight'   => 63,
    'discount' => true
  ],
  [
    'name'     => 'Night',
    'price'    => 16691.60,
    'weight'   => 63,
    'discount' => false
  ],
  [
    'name'     => 'Hearing',
    'price'    => 15081.24,
    'weight'   => 34,
    'discount' => false
  ],
  [
    'name'     => 'Pitch',
    'price'    => 23091.99,
    'weight'   => 34,
    'discount' => true
  ],
  [
    'name'     => 'News',
    'price'    => 1657.55,
    'weight'   => 57,
    'discount' => false
  ],
  [
    'name'     => 'Caught',
    'price'    => 17835.71,
    'weight'   => 99,
    'discount' => true
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produits</title>
</head>
<body>
  <h1>Produits</h1>

  <h2><?php echo count($products); ?> produits trouvés</h2>

  <main>
    <?php foreach ($products as $product) { ?>
      <div>
        <h3><?php echo $product['name']; ?></h3>
        <p><?php echo $product['price']; ?>€</p>
        <p><?php echo $product['discount']; ?></p>
      </div>
    <?php } ?>
  </main>
</body>
</html>