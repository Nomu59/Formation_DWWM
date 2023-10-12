<?php
    // Variable
    $max = 0;
    $pos = 0;

    // Conditions
    for ($i=1; $i <= 20; $i++) { 
        echo "Entre le ".$i."ème nombre : ";
        $nb = trim(fgets(STDIN));

        // Valeur la plus grande
        if ($nb > $max) {
            $max = $nb;
            $pos = $i;
        }
    }

    echo "La valeur saisie la plus grande est : ".$max." et ce numéro est le ".$pos. "ème de la liste";
?>