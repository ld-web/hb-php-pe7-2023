<?php

declare(strict_types=1);

const BOLD      = 5;
const ITALIC    = 1;
const UNDERLINE = 2;
const PARAGRAPH = 3;
const STYLE_NOT_SUPPORTED = 6;

const STYLES = [
  BOLD      => "strong",
  ITALIC    => "em",
  UNDERLINE => "u",
  PARAGRAPH => "p"
];

function apply_html(string $text, int $style): string
{
    // Vérifier que le style est valide
    if (!array_key_exists($style, STYLES)) {
        return $text;
    }

    $htmlTag = STYLES[$style];
    return "<$htmlTag>$text</$htmlTag>";
}

echo apply_html("Bonjour tout le monde", BOLD); // en gras
echo "<br />";
echo apply_html("Bonjour tout le monde", ITALIC); // en italique
echo "<br />";
echo apply_html("Bonjour tout le monde", UNDERLINE); // soulignés
echo "<br />";
echo apply_html("Bonjour tout le monde", STYLE_NOT_SUPPORTED); // Style qui n'existe pas
