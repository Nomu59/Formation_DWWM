<?php
    // Variable
    $moyenne = 0;
    $sup = 0;

    // Demander le nombre de notes à écrire
    $nb = readline("Combien de notes souhaites-tu écrire ? ");
    
    // Array "notes"
    $notes = array();

    // Saisie des valeurs via une boucle
    for ($i=0; $i < $nb; $i++) { 
        $notes[$i] = readline("Saisir une note");
        $moyenne += $notes[$i];
    }

    // Calculer la moyenne
    $moyenne /= $nb;

    // Recherche des notes supérieures à la moyenne via une condition
    for ($i=0; $i < $nb; $i++) { 
        if ($notes[$i] > $moyenne) {
            $sup++;
        }
    }
    
    // Affichage
    echo "Il y a " . $sup . " notes supérieures à la moyenne de la classe" . $moyenne;
?>