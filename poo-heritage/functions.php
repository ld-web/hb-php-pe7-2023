<?php

/**
 * @param Product[] $products
 * @return void
 */
function displayProductsSurfaces(array $products): void
{
    foreach ($products as $product) {
        echo "Nom : " . $product->getName() . ", surface : " . $product->getSurface() . "<br />";
    }
}
