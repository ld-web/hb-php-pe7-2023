<?php

$tab = [99, 67, 12, 52, 7, 30, 52, 24];

function add(array $array, int ...$newElements): array
{
    return [...$array, ...$newElements];
}

$myNewTab = add($tab, 5, 7, 8, 8, 9, 10, 1, 456);
var_dump($myNewTab);

$tab2 = [9, 9, 9, 9, 9, 9];

$otherNewTab = add($myNewTab, ...$tab2);
var_dump($otherNewTab);
