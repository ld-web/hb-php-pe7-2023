<?php

$names = ["Dominic", "Jeremiah", "Addie", "Philip", "David", "Francis"];
const BR_TAG = '<br />';
$namesLength = count($names);

// WHILE
echo "<h2>WHILE</h2>";

$i = 0; // Instruction d'initialisation

while ($i < $namesLength) { // Condition de maintien
    echo $names[$i] . BR_TAG;
    $i++; // Instruction de pas
}

// FOR
echo "<h2>FOR</h2>";
for ($i = 0; $i < $namesLength; $i++) {
    echo $names[$i] . BR_TAG;
}

// DO...WHILE
echo "<h2>DO...WHILE</h2>";
$i = 0;
do {
    echo $names[$i] . BR_TAG;
    $i++;
} while ($i < $namesLength);

// FOREACH
echo "<h2>FOREACH</h2>";
foreach ($names as $name) {
    echo $name . BR_TAG;
}

$user = [
  'name' => 'Randall',
  'age' => 35
];

echo "<h2>User associatif</h2>";
foreach ($user as $value) {
    echo $value . BR_TAG;
}

echo "<h2>User associatif avec key => value</h2>";
foreach ($user as $property => $value) {
    echo $property . ' : ' . $value . BR_TAG;
}
