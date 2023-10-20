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

/**
 * Generates select HTML tag for a given list
 *
 * @param string $name
 * @param IListItem[] $items
 * @return string
 */
function generateSelectList(string $name, array $items): string
{
    $output = '<select name="' . $name . '">';

    foreach ($items as $item) {
        $output .= '<option value="' . $item->getValue() . '">';
        $output .= $item->getLabel();
        $output .= '</option>';
    }

    $output .= '</select>';

    return $output;
}
