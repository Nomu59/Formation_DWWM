<?php
    // Variable
    $resultat = 0;

    // Array "valeurs"
    $valeurs = array(1, 2, 3, 4, 5);

    for ($i=0; $i < count($valeurs); $i++) { 
        $resultat += $valeurs[$i];
    }

    echo "La somme des valeurs du tableau est de : " . $resultat;
?>