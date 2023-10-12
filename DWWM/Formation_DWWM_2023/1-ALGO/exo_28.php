<?php
    // Saisie
    $nb = readline("Combien veux-tu de lignes ? ");

    // Conditions
    for ($lim = 1; $lim <= $nb; $lim++) {
        for ($i = 1; $i <= $lim; $i++) {
            echo $i;
        }
        echo "\n";
    }
?>