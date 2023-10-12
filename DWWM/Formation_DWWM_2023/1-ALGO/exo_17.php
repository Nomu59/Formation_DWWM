<?php
    // Variables
    echo "Entrez le premier nombre : ";
    $nb1 = trim(fgets(STDIN));

    echo "Entrez le second nombre : ";
    $nb2 = trim(fgets(STDIN));

    // Conditions
    if (($nb1 > 0 and $nb2 > 0) || ($nb1 < 0 and $nb2 < 0)) {
        echo "Le produit est positif";
    } elseif ($nb1 == 0 || $nb2 == 0) {
        echo "Le produit vaut 0";
    } else {
        echo "Le produit est négatif";
    }
?>