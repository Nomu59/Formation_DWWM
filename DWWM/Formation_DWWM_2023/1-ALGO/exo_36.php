<?php
    // Deux arrays copiés de l'exercice 35
    $tab1 = array(2, 5, 8, 4);
    $tab2 = array(6, 7);

    // Troisième array vide
    $schtroumpf = 0;

    // Boucle pour multiplier chaque valeur du tableau 2 par toutes les valeurs du tableau 1
    for ($i=0; $i < count($tab2); $i++) {
        for ($j=0; $j < count($tab1); $j++) { 
            $schtroumpf += $tab2[$i] * $tab1[$j];
        }
    }

    // Affichage
    echo $schtroumpf;
?>