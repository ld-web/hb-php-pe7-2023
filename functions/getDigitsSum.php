<?php

require_once "getIntPart.php";

function getDigitsSum(int $nb): int
{
    if ($nb < 10) {
        return $nb;
    }

    $digitAdd = $nb % 10; // isoler le dernier chiffre
    // Ajouter le dernier chiffre au résultat de getDigitsSum avec $nb / 10
    return $digitAdd + getDigitsSum(getIntPart($nb / 10));
}

var_dump(getDigitsSum(12345));
var_dump(getDigitsSum(11));
