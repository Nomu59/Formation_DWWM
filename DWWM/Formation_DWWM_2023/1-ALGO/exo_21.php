<?php
    // Variables
    echo "Entrez un nombre : ";
    $nb = trim(fgets(STDIN));

    $i = 0;
    $resultat = 1;

    // Condition
    while ($i < $nb) {
        $i++;
        $resultat *= $i;
    }
    
    // Affichage
    echo "Le résultat de ".$nb."! est : ".$resultat;
?>