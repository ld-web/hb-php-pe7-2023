<?php

function getIntPart(float $nb): int
{
    $intPart = (int) $nb; // un cast
    return $intPart;
}

// Pour tester la fonction, décommenter le code ci-dessous et inspecter les valeurs de retour
// var_dump(getIntPart(3.5));
// var_dump(getIntPart(39.47));
// var_dump(getIntPart(30.4));
