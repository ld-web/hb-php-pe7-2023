<?php

// Product : name, price, weight, discount (bool)
$products = [
  [
    'name'     => 'Slide',
    'price'    => 597.88,
    'weight'   => 27,
    'discount' => false
  ],
  [
    'name'     => 'In',
    'price'    => 477.77,
    'weight'   => 49,
    'discount' => false
  ],
  [
    'name'     => 'Bright',
    'price'    => 279.38,
    'weight'   => 34,
    'discount' => false
  ],
  [
    'name'     => 'Felt',
    'price'    => 421.36,
    'weight'   => 19,
    'discount' => true
  ],
  [
    'name'     => 'Former',
    'price'    => 337.93,
    'weight'   => 38,
    'discount' => false
  ],
  [
    'name'     => 'Bent',
    'price'    => 167.57,
    'weight'   => 11,
    'discount' => true
  ],
  [
    'name'     => 'Won',
    'price'    => 86.55,
    'weight'   => 37,
    'discount' => false
  ],
  [
    'name'     => 'Loud',
    'price'    => 558.72,
    'weight'   => 17,
    'discount' => true
  ],
  [
    'name'     => 'Plate',
    'price'    => 252.22,
    'weight'   => 14,
    'discount' => false
  ],
  [
    'name'     => 'Dance',
    'price'    => 231.35,
    'weight'   => 13,
    'discount' => false
  ],
  [
    'name'     => 'Accident',
    'price'    => 322.0,
    'weight'   => 5,
    'discount' => false
  ],
  [
    'name'     => 'Failed',
    'price'    => 584.51,
    'weight'   => 34,
    'discount' => false
  ],
  [
    'name'     => 'Ear',
    'price'    => 408.73,
    'weight'   => 40,
    'discount' => false
  ],
  [
    'name'     => 'Feed',
    'price'    => 540.52,
    'weight'   => 6,
    'discount' => true
  ],
  [
    'name'     => 'Twice',
    'price'    => 227.41,
    'weight'   => 20,
    'discount' => true
  ],
  [
    'name'     => 'Laugh',
    'price'    => 573.90,
    'weight'   => 10,
    'discount' => false
  ],
  [
    'name'     => 'Thy',
    'price'    => 193.74,
    'weight'   => 24,
    'discount' => true
  ],
  [
    'name'     => 'Explanation',
    'price'    => 108.16,
    'weight'   => 47,
    'discount' => false
  ],
  [
    'name'     => 'Creature',
    'price'    => 79.0,
    'weight'   => 31,
    'discount' => true
  ],
  [
    'name'     => 'Principle',
    'price'    => 423.66,
    'weight'   => 1,
    'discount' => true
  ],
  [
    'name'     => 'Row',
    'price'    => 428.74,
    'weight'   => 3,
    'discount' => false
  ],
  [
    'name'     => 'Notice',
    'price'    => 398.89,
    'weight'   => 27,
    'discount' => true
  ],
  [
    'name'     => 'Weight',
    'price'    => 81.9,
    'weight'   => 33,
    'discount' => false
  ],
  [
    'name'     => 'Leave',
    'price'    => 491.32,
    'weight'   => 49,
    'discount' => true
  ],
  [
    'name'     => 'Sea',
    'price'    => 49.72,
    'weight'   => 1,
    'discount' => false
  ],
  [
    'name'     => 'Aloud',
    'price'    => 42.54,
    'weight'   => 10,
    'discount' => false
  ],
  [
    'name'     => 'Fort',
    'price'    => 243.94,
    'weight'   => 9,
    'discount' => true
  ],
  [
    'name'     => 'Porch',
    'price'    => 453.66,
    'weight'   => 40,
    'discount' => false
  ],
  [
    'name'     => 'Case',
    'price'    => 460.29,
    'weight'   => 1,
    'discount' => false
  ],
  [
    'name'     => 'Swing',
    'price'    => 182.82,
    'weight'   => 2,
    'discount' => true
  ],
  [
    'name'     => 'Weigh',
    'price'    => 312.77,
    'weight'   => 22,
    'discount' => false
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produits</title>
  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body>
  <main class="prose prose-lg mx-auto">
    <h1>Produits</h1>
    <h2><?php echo count($products); ?> produits trouvés</h2>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mx-6 md:mx-0">
      <?php foreach ($products as $product) { ?>
        <div class="border-[1px] px-4 py-3 shadow-lg">
          <h3 class="m-0">
            <?php echo $product['name']; ?>
          </h3>
          <p class="m-0">
            <?php echo $product['price']; ?>€
          </p>
          <?php if ($product['discount']) { ?>
            <div>
              <span class="text-sm bg-green-500 text-white px-3 py-1">
                PROMO
              </span>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </section>
  </main>
</body>
</html>