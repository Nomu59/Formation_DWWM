<?php
    // Variable
    $i = 0;

    // Array valeurs
    $valeurs = array();

    // Demander combien de valeurs on souhaite entrer
    $nb = readline("Combien de valeurs souhaites-tu entrer ? ");

    // Ecriture des valeurs via une boucle
    for ($i=0; $i < $nb; $i++) {
        $valeurs[$i] = readline("Ecris une valeur ");
        $valeurs[$i]++;
    }

    // Affichage
    print_r($valeurs);
?>