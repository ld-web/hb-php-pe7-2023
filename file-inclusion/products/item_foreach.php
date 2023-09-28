<?php
require_once '../components/head.php';
require_once '../data/products.php';
?>

<main class="prose prose-lg mx-auto pt-24">
  <?php
  $id = intval($_GET['id']); // retourne 0 en cas de valeur incorrecte
if ($id === 0) {
    http_response_code(404);
    echo "Produit non trouvé";
    exit;
}
$found = false;
foreach ($products as $product) {
    if ($product['id'] === $id) {
        $found = true;
        ?>
      <h1><?php echo $product['name']; ?></h1>
      <h2><?php echo $product['price']; ?>€</h2>
      <?php if ($product['discount']) { ?>
        <div>
          <span class="text-sm bg-green-500 text-white px-3 py-1">
            PROMO
          </span>
        </div>
      <?php }
      }
} ?>
</main>

<?php require_once '../components/footer.php';
