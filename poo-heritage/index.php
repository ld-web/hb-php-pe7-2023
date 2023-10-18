<?php

require_once 'classes/Product.php';
require_once 'classes/ProductRect.php';
require_once 'classes/ProductCirc.php';

$rectProduct = new ProductRect("Peinture", 150, 600);
$circProduct = new ProductCirc("Assiette", 50);

var_dump($rectProduct);
var_dump($circProduct);
