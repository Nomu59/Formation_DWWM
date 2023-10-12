<?php
    // Variables
    $age = 0;
    $sexe = 0;

    // Demander l'âge
    while ($age <= 0) {
        $age = readline("Quel est ton âge ? ");
    }

    // Demander le sexe
    while ($sexe != "homme" && $sexe != "femme") {
        $sexe = readline("Quel est ton sexe ? ");
    }

    // Conditions
    if (($sexe == "homme" && $age > 20) || ($sexe == "femme" && ($age >= 18 && $age <= 35))) {
        echo "Vous êtes imposable";
    } else {
        echo "Vous n'êtes pas imposable";
    }
?>