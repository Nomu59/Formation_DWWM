<?php
    // Deux arrays
    $tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
    $tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);

    // Troisième array vide
    $somme = array();

    // Boucle pour additionner les deux tableaux valeur par valeur
    for ($i=0; $i < count($tab1); $i++) { 
        $somme[$i] = $tab1[$i] + $tab2[$i];
    }
    
    // Affichage
    print_r($somme);
?>