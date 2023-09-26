<?php

$array = []; // tableau vide
$notes = [1, 4, 10, 1, 13, 10, 20, 8, 4, 18, 10, 0];
const COUNTRIES = ["France", "Japan", "Germany"];

// Ajouter un élément au tableau vide
$array[] = "Clyde"; // Ajoute à la fin du tableau

// Afficher la première note du tableau de notes
echo $notes[0];
// Ajouter une note au début du tableau de notes
array_unshift($notes, 15);
var_dump($notes);

// Nombre total d'éléments d'un tableau
$notesLength = count($notes);
echo "Il y a $notesLength notes";

// Modification d'un élément
$array[0] = "May";

// Tableau associatif
$user = [
//clé    => valeur
  "name" => "John Carlson",
  "age"  => 64
];

// Pour inspecter le contenu du tableau et sa structure
var_dump($user);

// Pour afficher le nom de l'utilisateur
echo "Bienvenue, " . $user['name'];

// Opérateurs sur les tableaux
//       0, 1, 2
$tab1 = [1, 2, 3];
//       0, 1, 2, 3
$tab2 = [4, 5, 6, 7];

$tab3 = $tab1 + $tab2;

var_dump($tab3);

// Array destructuring
// On reprend $ta1 déclaré juste au-dessus
[$one, $two] = $tab1;

var_dump($one, $two);

// [2 => $three] = $tab1;
[,,$three] = $tab1;

var_dump($three);
