<?php
    // Variable
    $max = 0;
    $pos = 0;

    // Demander le nombre de valeurs à entrer
    $nb = readline("Combien de valeurs souhaites-tu entrer ? ");

    // Array "valeurs"
    $valeurs = array();

    // Saisie des valeurs via une boucle
    for ($i=0; $i < $nb; $i++) { 
        $valeurs[$i] = readline("Saisis une valeur ");

        // Recherche de la valeur la plus grande via une condition
        if ($valeurs[$i] > $max) {
            $max = $valeurs[$i];
            $pos = $i;
        }
    }

    echo "La valeur la plus grande du tableau est : " . $max . " et elle occupe la position " . $pos . " du tableau";
?>