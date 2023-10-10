<?php
require_once 'functions.php';

if (!isset($_GET['q'])) {
    redirect('index.php');
}

['q' => $search] = $_GET;

require_once 'layout/header.php';
require_once 'data/members.php';
require_once 'functions/member.php';
?>

<main class="prose mx-auto">
  <h1>Résultats de la recherche pour "<?php echo $search; ?>"</h1>
  
  <div>
    <?php
    // foreach (boucle)
    // foreach ($members as $member) {
    //     if (stripos(getFullName($member), $search) !== false) {
    //         require 'templates/member-card.php';
    //     }
    // }

    $results = findMembers($members, $search);

foreach ($results as $member) {
    require 'templates/member-card.php';
}

if (empty($results)) {
    require_once 'templates/no-result.php';
} ?>
  </div>
</main>

<?php
require_once 'layout/footer.php';
