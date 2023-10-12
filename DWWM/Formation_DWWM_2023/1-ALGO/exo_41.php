<?php
    // Array "tab" (incrémentation $i)
    $tab = array("D", "E", "C", "A", "L", "A", "G", "E");

    // Variable temporaire pour ne pas perdre la première valeur
    $temp = $tab[0];

    // Décalage de tout les éléments sauf le premier via une boucle
    for ($i=0; $i < count($tab) - 1; $i++) { 
        $tab[$i] = $tab[$i + 1];
    }

    // Décalage du premier élément stocké dans une variable temporaire
    $tab[count($tab) - 1] = $temp;

    // Affichage
    print_r($tab);
?>