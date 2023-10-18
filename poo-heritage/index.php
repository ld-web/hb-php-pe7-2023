<?php

require_once 'classes/Product.php';
require_once 'classes/ProductRect.php';
require_once 'classes/ProductCirc.php';
require_once 'functions.php';

$rectProduct = new ProductRect("Peinture", 150, 600);
$circProduct = new ProductCirc("Assiette", 50);
$otherCircProduct = new ProductCirc("Poêle", 40);
$additionalRectProduct = new ProductRect("Tableau", 500, 200);


var_dump($rectProduct);
var_dump($circProduct);

var_dump($rectProduct->getSurface(), $circProduct->getSurface());

$products = [$rectProduct, $circProduct, $otherCircProduct, $additionalRectProduct];

displayProductsSurfaces($products);
