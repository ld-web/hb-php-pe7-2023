<?php
$pageTitle = "Nos services";
require_once 'layout/header.php';
require_once 'data/cars.php';

if (isset($_GET['y'])) {
    $year = intval($_GET['y']);

    $results = array_filter($cars, fn (Car $car) => $year === $car->getYear());
} else {
    $results = $cars;
}

$years = array_unique(array_map(fn (Car $car): int => $car->getYear(), $cars));
sort($years);
?>

<h1>Services</h1>

<form method="GET" class="mb-12">
  <label for="underline_select" class="sr-only">Underline select</label>
  <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" name="y">
      <option value="0">Choisissez une année...</option>
      <?php foreach ($years as $y) { ?>
      <option value="<?php echo $y; ?>" <?php echo (isset($_GET['y']) && intval($_GET['y']) === $y) ? "selected" : ""; ?>>
        <?php echo $y; ?>
      </option>
      <?php } ?>
  </select>
  <button type="submit" class="bg-gray-900 text-white px-2 py-1 mt-4">RECHERCHER</button>
</form>

<div class="flex flex-wrap gap-4 justify-between">
  <?php foreach ($results as $car) {
      require 'templates/car-item.php';
  } ?>

  <?php if (empty($results)) { ?>
    <h2>Aucun résultat trouvé</h2>
  <?php } ?>
</div>



<?php require_once 'layout/footer.php';
