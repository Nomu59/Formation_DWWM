<?php
    // Variables
    $a = 3;
    $b = 10;
    $c = 0;

    // Calculs
    $c = $a + $b;
    $b = $a + $b;
    $a = $c;

    // Affichage
    echo "a = ".$a;
    echo "\n";
    echo "b = ".$b;
    echo "\n";
    echo "c = ".$c;
?>