<?php
require_once 'layout/header.php';
require_once 'data/members.php';
?>

<main class="prose mx-auto">
  <h1>Résultats de la recherche pour "<?php echo $_GET['q']; ?>"</h1>
  
  <div>
    <?php var_dump($_GET['q']); ?>
  </div>
</main>

<?php
require_once 'layout/footer.php';
