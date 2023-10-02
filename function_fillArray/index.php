<?php
require_once 'functions.php';

// Validations à faire sur size :
// - Existence en tant que paramètre GET
// - Format correct (integer)

// Return early pattern :
// Je vérifie dans un premier temps la situation opposée de celle voulue
// J'aimerais avoir un paramètre GET nommé "size", et qu'il soit de type numérique
// Je teste donc : si je n'ai pas de paramètre GET nommé "size", ou bien que ce paramètre GET
// n'est pas de type numérique
// Si c'est le cas, alors j'interromps l'exécution du script
// Il n'y a donc pas de "else" à inscrire, puisque j'utilise la fonction "exit"
if (!isset($_GET['size']) || !is_numeric($_GET['size'])) {
    // Interrompre l'exécution du script : sortir prématurément
    http_response_code(400);
    echo "La taille est obligatoire en paramètre GET et doit être un nombre";
    exit;
}

$size = (int) $_GET['size'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau avec <?php echo $size; ?> éléments</title>
</head>
<body>
  <h1>Tableau rempli dynamiquement avec <?php echo $size; ?> éléments</h1>
  <p>
    <?php
      $tab = fillArray($size);
var_dump($tab);
?>
  </p>
</body>
</html>