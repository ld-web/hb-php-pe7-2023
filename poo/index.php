<?php

// Classe, objet, méthode, instance, extends (héritage), constructeur, encapsulation, attributs (propriétés), visibilité, abstraction, classe abstraite, interface, polymorphisme

// Product : price, description, name, quantity, image, serialNumber...

require_once 'classes/Product.php';

// $product est un objet : une instance de la classe Product
$product = new Product("Bouquin");
$product
  ->setDiscount(true)
  ->setPriceVatFree(70);
// Impossible d'accéder directement à des propriétés privées
// $product->discount = true;
// $product->name = "journey";
// $product->priceVatFree = 31.68;

// $otherProduct est UNE AUTRE instance de la classe Product
$otherProduct = new Product("Chaise");
// ... Appel d'une fonction de calcul d'un prix...
// Résultat de cette fonction : -50
// Problème ?
$otherProduct->setPriceVatFree(-50);
var_dump($otherProduct);

// Accéder à la valeur qui se trouve dans la propriété discount de mon instance $product
// var_dump($product->discount);
var_dump($product);
// echo $product->getName();

require_once 'classes/User.php';

$user = new User();
// Interface fluide : appels en chaîne
$user
  ->setFirstname("Belle")
  ->setName("Fields")
  ->setBirthDate(new DateTime("1995-05-05"));

echo $user->getFullName();

var_dump($user);
