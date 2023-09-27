<?php
$title = "Bienvenue !";
require_once 'data/products.php'; // DATA
require_once 'components/head.php'; // LAYOUT
?>

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

<?php
require_once 'components/footer.php';
