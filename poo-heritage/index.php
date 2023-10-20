<?php

require_once 'classes/Product.php';
require_once 'classes/ProductRect.php';
require_once 'classes/ProductCirc.php';
require_once 'classes/Email.php';
require_once 'functions.php';

$rectProduct = new ProductRect(1, "Peinture", 150, 600);
$circProduct = new ProductCirc(2, "Assiette", 50);
$otherCircProduct = new ProductCirc(3, "Poêle", 40);
$additionalRectProduct = new ProductRect(4, "Tableau", 500, 200);

var_dump($rectProduct);
var_dump($circProduct);

var_dump($rectProduct->getSurface(), $circProduct->getSurface());

$products = [$rectProduct, $circProduct, $otherCircProduct, $additionalRectProduct];

displayProductsSurfaces($products);

echo generateSelectList('product', $products);

$emails = [
  new Email("foprereci@sor.mp"),
  new Email("vamuji@vos.et"),
  new Email("pakvaf@pakuw.vu"),
  new Email("wid@nij.re"),
  new Email("ci@sajije.gn"),
  new Email("nawitu@kiwkal.bm"),
  new Email("vakhimec@jub.qa"),
  new Email("rafkafam@gemke.zw"),
];

echo generateSelectList('email', $emails);
