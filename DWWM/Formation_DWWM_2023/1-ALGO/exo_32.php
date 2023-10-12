<?php
    // Array "notes"
    $notes = array();

    // Condition
    for ($i=0; $i < 9; $i++) { 
        $notes[$i] = readline("Saisir une note");
    }

    // Affichage de l'array
    print_r($notes);
?>