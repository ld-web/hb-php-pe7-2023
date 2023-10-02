<?php

$notes = [11, 19, 19, 18, 15, 17, 19, 17, 9, 18, 7, 16];
const AVG = 10;

// Fonction anonyme
// $validNotes = array_filter($notes, function (int $note): bool {
//     return $note >= AVG;
// });

// Fonction fléchée
$validNotes = array_filter($notes, fn (int $note): bool => $note >= AVG);

var_dump($notes, $validNotes);
