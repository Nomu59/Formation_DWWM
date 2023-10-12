<?php
    // Autre façon de faire

    // // Tableau
    // $tab = array();

    // // Conditions
    // for ($i=1; $i <= 20; $i++) { 
    //     echo "Entre le ".$i."ème nombre : ";
    //     $nb = trim(fgets(STDIN));
    //     array_push($tab, $nb);
    // }

    // // Affichage
    // echo "La valeur saisie la plus grande est : ".max($tab);
    

    // Variable
    $max = 0;

    // Conditions
    for ($i=1; $i <= 20; $i++) { 
        echo "Entre le ".$i."ème nombre : ";
        $nb = trim(fgets(STDIN));

        // Valeur la plus grande
        if ($nb > $max) {
            $max = $nb;
        }
    }

    echo "La valeur saisie la plus grande est : ".$max;
?>