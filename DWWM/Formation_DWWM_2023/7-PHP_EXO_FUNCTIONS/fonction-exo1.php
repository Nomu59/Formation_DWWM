<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 7.3'`

*/

// Fonction
function message(string $texte) : void {
    echo $texte;
    echo PHP_EOL;
}

// Affichage
message('Php 7.3');