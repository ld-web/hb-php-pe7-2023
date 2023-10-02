<?php

function fillArray(int $length): array
{
    $array = [];
    for ($i = 1; $i <= $length; $i++) {
        $array[] = $i;
    }
    return $array;
}
