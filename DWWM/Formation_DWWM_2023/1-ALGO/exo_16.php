<?php
    // Variables
    echo "Entrez un nombre : ";
    $nb = trim(fgets(STDIN));

    // Condition
    if ($nb > 0) {
        echo "Ce nombre est positif";
    } elseif ($nb == 0) {
        echo "Ce nombre vaut 0";
    } else {
        echo "Ce nombre est négatif";
    }
?>