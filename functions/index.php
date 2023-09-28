<?php
/*
Écrire une fonction welcome saluant un prénom passé en paramètre, de type string.
La fonction affichera à l'écran "Salutations, [prénom] !" où [prénom] est le paramètre passé.
Faire en sorte qu'un prénom par défaut soit affiché si aucune prénom n'est fourni (paramètre facultatif)
Changer la fonction pour qu'elle n'affiche plus les salutations mais retourne une chaîne de caractères
Enfin, utiliser la fonction pour afficher ce qu'elle retourne
*/
function welcome(string $firstname = "Cynthia"): string
{
    return "Salutations, $firstname !";
}

$welcome = welcome("Bobby");
echo "$welcome<br />";
echo welcome();
