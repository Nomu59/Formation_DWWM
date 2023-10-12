<?php
    // Variables
    echo "Entrez un nombre : ";
    $nb = trim(fgets(STDIN));

    // Condition
    for ($i=1; $i <= 10; $i++) { 
        echo $nb + $i." ";
    }
?>