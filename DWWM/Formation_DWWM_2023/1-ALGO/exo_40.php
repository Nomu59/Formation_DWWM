<?php
    // Variable
    $max = 0;

    // Array "T" a deux dimensions (12, 8)
    $t = array();

    // 12 lignes du tableau via une boucle
    for ($i=0; $i < 12; $i++) { 
        $t[$i] = array(1, 2, 3, 4, 5, 6, 7, 8);
        
        // Recherche de la plus grande valeur du tableau
        if ($t[$i] > $max) {
            $max = $i;
        }
    }

    // Affichage
    echo $max;

    // De ou tu regardes mon code? je me sers de t.. heu... j'utilise notre conversation a des fins professionnelles et tu oses lire mon code sans me le demander? tu me dois 4000 euros voilà raf, de toute façon le ode est incomplet alors t'as perdu ton temps et ton argent parce que le temps au final c'est de l'argent mec, et ouais j't'ai eu et toi tu m'as pas eu, bah tu sais quoi? va avoir les cramptés au lieu de me déranger.
    ?>