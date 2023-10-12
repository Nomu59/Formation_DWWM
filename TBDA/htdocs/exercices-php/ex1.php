<?php
    // Ecrire un algorithme qui affiche la catégorie de l'enfant en fonction de son âge:
    /*
        - de 6 à 7 ans ==> "tu es poussin"
        - de 8 à 9 ans ==> " tu es pupille"
        - de 10 à 11 ans ==> "tu es minime"
        - plus de 11 ans ==> "tu es cadet"
        */
        
        $age = $_GET["age"];
    if($age < 6){
        echo "Tu es trop jeune";
    } elseif($age <= 7){
        echo "tu es poussin";
    } elseif($age <= 9){
        echo "tu es pupille";
    } elseif($age <= 11){
        echo "tu es minime";
    } else{
        echo "tu es cadet";
    }
?>