<?php

/*

traduire le bloc conditionnel `if` en bloc conditionnel `switch`

résultat attendu :
X est plus grand que 50

ou :
X est plus petit que 50

ou :
X est égal à 50

NOTE : la valeur de X change à chaque exécution

*/

$i = rand(0, 100);

switch (true) {
case $i > 50 :
    echo "$i est plus grand que 50";
    echo PHP_EOL;
    break;
case $i < 50 :
    echo "$i est plus petit que 50";
    echo PHP_EOL;
    break;
default:
    echo "$i est égal à 50";
    echo PHP_EOL;
}

