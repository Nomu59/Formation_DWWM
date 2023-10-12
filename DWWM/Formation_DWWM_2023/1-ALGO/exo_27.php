<?php
    // Variables
    $oral = 0;
    $ecrit = 0;

    // Demander note oral
    do {
        $oral = readline("Quel est la note de l'oral ? ");
    } while ($oral < 0 || $oral > 20);

    // Demander note écrit
    do {
        $ecrit = readline("Quel est la note de l'écrit ? ");
    } while ($ecrit < 0 || $ecrit > 20);

    // Calculer la moyenne
    $moyenne = ($oral + $ecrit * 2) / 3;

    // Condition
    if ($moyenne >= 10) {
        echo "La moyenne des deux notes est de ".$moyenne." et elle permet de valider le module";
    } elseif ($moyenne < 10) {
        echo "La moyenne des deux notes est de ".$moyenne." et elle ne permet pas de valider le module";
    }
?>