<?php
    // Saisies
    $a = readline("Choisis une valeur pour le a ");
    $b = readline("Choisis une valeur pour le b ");
    $c = readline("Choisis une valeur pour le c ");

    // Variable delta
    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        echo "L'équation ".$a."x + ".$b."x + ".$c." n'a pas de racine";
    } elseif ($delta == 0) {
        echo "L'équation ".$a."x + ".$b."x + ".$c." a comme unique racine : ".-$b / (2 * $a);
    } elseif ($delta > 0) {
        echo "L'équation ".$a."x + ".$b."x + ".$c." a deux racines qui sont : ".(-$b - sqrt($delta)) / (2 * $a)." et : ".(-$b + sqrt($delta)) / (2 * $a);
    }
?>