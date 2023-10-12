<?php
    // Variable
    $resultat = 0;

    // Saisies
    $nb1 = readline("Ecris un premier nombre ");
    $nb2 = readline("Ecris un second nombre ");

    // Condition
    for ($i=0; $i < $nb2; $i++) { 
        $resultat += $nb1;
    }

    // Affichage
    echo "Le résultat de cette multiplication est : ".$resultat;
?>