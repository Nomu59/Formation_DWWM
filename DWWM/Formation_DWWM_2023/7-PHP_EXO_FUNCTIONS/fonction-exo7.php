<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console

*/

// Fonction
function ouiNon(bool $bool) {
    switch ($bool) {
    case true:
        return 'oui' . PHP_EOL;
        break;
    default:
        return 'non' . PHP_EOL;
    }
}

// Affichage
echo ouiNon(true);
echo ouiNon(false);