<?php

    #On déclare et saisit les variables

    echo "Entrez le premier nombre : ";
    $nb1 = trim(fgets(STDIN));

    echo "Entrez le second nombre : ";
    $nb2 = trim(fgets(STDIN));

    #On teste le signe du produit des deux nombres

    if (($nb1 > 0 and $nb2 > 0) || ($nb1 < 0 and $nb2 < 0)) {
        echo "Le produit est positif";
    }
    else {
        echo "Le produit est négatif";
    }
?>