<?php
    // Variables
    echo "Entrez un nombre : ";
    $nb = trim(fgets(STDIN));

    $i = 0;

    // Condition
    while ($i < $nb) {
        $i += 1;
        echo $i." ";
    }
?>