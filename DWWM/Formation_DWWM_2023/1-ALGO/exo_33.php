<?php
    // Variables
    $positives = 0;
    $negatives = 0;
    // Array "valeurs"
    $valeurs = array();

    // Saisie du nombre de valeurs
    $nb = readline("Combien souhaites-tu saisir de valeurs?");

    // Condition
    for ($i=0; $i < $nb; $i++) { 
        $valeurs[$i] = readline("Saisir une valeur");

        // Compteur de valeurs positives et négatives
        if ($valeurs[$i] > 0) {
            $positives++;
        } elseif ($valeurs[$i] < 0) {
            $negatives++;
        }
    }

    echo "Il y a ".$positives. " valeurs positives et ".$negatives." valeurs négatives";
?>