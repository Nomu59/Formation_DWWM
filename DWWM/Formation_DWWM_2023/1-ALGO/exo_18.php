<?php
    // Variable
    echo "Quel est l'âge de l'enfant ? ";
    $age = trim(fgets(STDIN));

    // Conditions
    if ($age < 6) {
        echo "La valeur entrée est invalide";
    } elseif ($age <= 7) {
        echo "Il/Elle est dans la catégorie 'Poussin'";
    } elseif ($age <= 9) {
        echo "Il/Elle est dans la catégorie 'Pupille'";
    } elseif ($age <= 11) {
        echo "Il/Elle est dans la catégorie 'Minime'";
    } elseif ($age >= 12) {
        echo "Il/Elle est dans la catégorie 'Cadet'";
    }
?>