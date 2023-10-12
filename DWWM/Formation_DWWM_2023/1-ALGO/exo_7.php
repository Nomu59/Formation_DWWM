<?php
    // Variables
    $a = 1;
    $b = 2;
    $c = 3;
    $temp = 0;

    // Calculs
    $temp = $c;
    $c = $b;
    $b = $a;
    $a = $temp;

    // Affichage
    echo "a = ".$a;
    echo "\n";
    echo "b = ".$b;
    echo "\n";
    echo "c = ".$c;
?>