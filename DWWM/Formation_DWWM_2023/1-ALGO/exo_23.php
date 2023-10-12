<?php
    // Méthode demandée

    // // Variables
    // $nb = 1;
    // $max = 0;
    // $pos = 0;
    // $i = 0;

    // // Conditions
    // while ($nb != 0) {
    //     $nb = readline("Ecris un nombre ");
    //     $i++;
    //     if ($nb > $max) {
    //         $max = $nb;
    //         $pos = $i;
    //     }
    // }

    // // Affichage
    // echo "Le plus grand nombre de la liste est ".$max." et c'est le ".$pos."ème de la liste";


    // Autre méthode avec "do while"

    // // Variables
    // $nb = 0;
    // $max = 0;
    // $pos = 0;
    // $i = 0;

    // // Conditions
    // do {
    //     $nb = readline("Ecris un nombre");
    //     $i++;
    //     if ($nb > $max) {
    //         $max = $nb;
    //         $pos = $i;
    //     }
    // } while ($nb != 0);

    // // Affichage
    // echo "Le plus grand nombre de la liste est ".$max." et c'est le ".$pos."ème de la liste";


    // Méthode du formateur
    
       #Déclaration et saisit des variables
       echo "Entrez un nombre : ";
       $nbInit = trim(fgets(STDIN));
       $nbPos = 0;
       $nbComp = -INF;
       $i = 1;
   
       #Traitement
       while ($nbComp != 0) {
           if ($nbInit<$nbComp) {
               $nbInit = $nbComp;
               $nbPos = $i ;
           }
           $i++;
           echo "Entrez un nombre :";
           $nbComp = trim(fgets(STDIN));
       }
   
       echo "Le nombre le plus grand est ".$nbInit." il se trouve en position ".$nbPos.".";
?>