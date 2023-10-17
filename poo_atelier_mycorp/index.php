<?php
require_once 'layout/header.php';
require_once 'data/members.php';
?>

<main class="prose mx-auto">
  <h1>Bienvenue chez MyCorp</h1>

  <h2>Nos membres</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <?php foreach ($members as $member) {
        require 'templates/member-card.php';
    } ?>
  </div>
</main>

<?php require_once 'layout/footer.php';
