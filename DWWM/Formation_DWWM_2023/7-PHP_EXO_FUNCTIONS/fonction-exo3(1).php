<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

// Fonction
function addition(int $nb1, int $nb2) {
    return $nb1 + $nb2;
}

// Affichage
echo addition(1, 2);