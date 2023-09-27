<?php
$title = "Bienvenue !";
require_once 'data/products.php'; // DATA
require_once 'components/head.php'; // LAYOUT
?>

<main class="prose prose-lg mx-auto pt-24">
  <h1>Produits</h1>
  <h2><?php echo count($products); ?> produits trouvés</h2>

  <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mx-6 md:mx-0">
    <?php foreach ($products as $product) {
        require 'components/product/card-item-template.php';
    } ?>
  </section>
</main>

<?php
require_once 'components/footer.php';
