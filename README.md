# Human Booster - PE7 - PHP

## Introduction

[intro](intro/index.php) :

- `index.php` : page d'accueil
- Fonction de la SPL `echo` pour ajouter du contenu à la réponse
- HTML & PHP au sein d'un même fichier (balises PHP)
- Variables, constantes
- Commentaires
- Concaténation (opérateur `.`)

[index.php](index.php) :

- Fichier racine du serveur web au sein du dev container VSCode
- Fonction de la SPL `phpinfo()` pour afficher les informations de configuration de PHP dans le navigateur (CLI : `php -i`)

## Tableaux

[arrays](arrays/index.php) :

- Initialisation d'un tableau (vide ou avec des éléments)
- Accès à un élément seul (index/clé)
- Ajout d'un élément au début du tableau (`array_unshift`), à la fin du tableau (`$tab[] = "element"`)
- Fonction de la SPL `count` pour compter les éléments d'un tableau
- Tableaux associatifs : définition de clés/index personnalisés, association à une valeur avec `=>`
- Array destructuring : extraction de valeurs contenues dans un tableau, directement dans des variables
- Spread operator : pour propager les éléments d'un tableau au sein d'un autre tableau (utile pour une copie par exemple)
- Fonctions sur les tableaux : utilisation de quelques fonctions de la SPL, différence entre style impératif & déclaratif

[boucles](arrays/loops.php) :

- Exploration des 4 types de boucles en PHP :
  - `while`
  - `for`
  - `do...while`
  - `foreach` : avec foreach, 2 syntaxes :
    - `foreach ($tab as $value)`
    - `foreach ($tab as $key => $value)`

[Atelier tableau de produits multidimensionnel](arrays/multidimensional.php) :

- Définition d'un tableau multidimensionnel : un tableau de tableaux
- Les sous-tableaux représentent chaque produit, et sont indexés sur les propriétés d'un produit
- Utilisation de TailwindCSS en mode CDN (déconseillé sur des vrais projets, utiliser NPM + un bundler comme [Webpack](https://webpack.js.org/), [Parcel](https://parceljs.org/), [Rollup](https://rollupjs.org/) par exemple)
- Avec une boucle `foreach`, on itère sur chaque élément du tableau : chaque produit. Chaque produit étant lui-même un tableau associatif, on peut accéder à ses propriétés via les index/clés correspondant(e)s

## Inclusion de fichiers

Reprise de l'atelier liste de produits, et séparation dans [un fichier de data](file-inclusion/data/products.php) : séparation des responsabilités, le fichier de data définit la donnée, la page d'index affiche la donnée. On peut alors importer (`require_once`) le fichier de data dans l'index pour en afficher le contenu.

Ensuite, création de [composants](file-inclusion/components/) pour séparer l'affichage en différentes parties.

Ajout d'une [navbar](file-inclusion/components/nav.php) que l'on inclut directement dans le [head](file-inclusion/components/head.php) de l'application.

Enfin, [découverte de la constante `__DIR__`](https://github.com/ld-web/hb-php-pe7-2023/commit/979191b459afc517fef30027654386b933f149cc#diff-4a5469266895af726b0632525db30d22eb12e3752d278e9588d241a376106bfbR25) pour désigner le répertoire courant. Cela nous aide à construire des chemins plus robustes, et qui ne dépendent pas du script en cours d'exécution.

## Superglobales

Découverte de la variable superglobale [`$_GET`](https://github.com/ld-web/hb-php-pe7-2023/commit/10d9e3e7360a113f6d2f06beca6d7b10683da2ee#diff-726a4e253257ed88e966a23e57153924cf3a42e3e9b17ded7742ed0301826b76R6) pour récupérer les paramètres inscrits dans l'URL.

## Fonctions

Écriture de plusieurs fonctions :

- [minInt](functions/minInt.php) : Plus petit nombre parmi 3
- [factorial](functions/factorial.php) : Factorielle d'un nombre
- [getIntPart](functions/getIntPart.php) : Récupérer la partie entière d'un nombre passé en paramètre
- [getDigitsSum](functions/getDigitsSum.php) : Calculer la somme des chiffres composant un nombre. Dans cette fonction, on réutilise la méthode `getIntPart` définie préalablement. On peut alors `require_once` le fichier qui contient sa définition, afin de pouvoir l'utiliser dans `getDigitsSum`
- [apply_html](functions/apply_html.php) : Application d'une balise HTML sur un texte donné. Définition de constantes afin de définir des codes (valeurs entières) et leur donner une signification dans le code source. On peut alors manipuler des constantes comme `BOLD` ou `ITALIC` sans avoir à retenir la valeur entière associée
- [fillArray](function_fillArray/) : Définition d'une fonction dans un fichier séparé [functions.php](function_fillArray/functions.php), puis `require_once` dans [l'index](function_fillArray/index.php). Petite combinaison avec le chapitre sur les superglobales : on passe en paramètre GET le nombre d'éléments qu'on souhaite puis on génère dynamiquement un tableau en fonction de ce paramètre GET
- [Fonctions anonymes, arrow function](functions/anonymous_arrow_fn.php)
- [Argument unpacking](functions/argument_unpacking.php)
