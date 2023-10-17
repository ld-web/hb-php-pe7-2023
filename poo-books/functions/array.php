<?php

function randomElement(array $array): mixed
{
    $randomNumber = random_int(0, count($array) - 1);
    return $array[$randomNumber];
}
