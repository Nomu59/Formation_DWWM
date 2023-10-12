<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Direct_Assurance_logo_2009.png">
    <link rel="stylesheet" href="eligibilite.css">
    <title>Eligibilité</title>
</head>
<body>
   <?php 
        /* critères :

        tarif rouge :
            - 25 ans : - permis < 2 ans et accident = 0
                - permis >= 2 ans et accident = 1
            + 25 ans : - permis < 2 ans et accident = 1
                -permis >= 2 ans et accident = 2

        refus d'assurance :
            - 25 ans : - permis < 2 ans et accident > 0
                - permis >= 2 ans et accident > 1
            + 25 ans : - permis < 2 ans et accident > 1
                - permis >= 2 ans et accident > 2

        tarif orange :
            - 25 ans : - permis >= 2 ans et accident = 0
            + 25 ans : - permis < 2 ans et accident = 0
                - permis >= 2 ans et accident = 1

        tarif vert :
            + 25 ans : -permis >= 2 ans et accident = 0

        tarif upgrade si ancienneté >= 5 ans */

    
        $age = $_GET["age"];
        $anciennete = $_GET["anciennete"];
        $accident = $_GET["accident"];
        $entree = $_GET["entree"];

        $gris = "<p id='gris'>Vous êtes éligible au tarif gris !</p><br>
        <img src='images/voiture-HS.jpg' alt='image'>";
        $rouge = "<p id='rouge'>Vous êtes éligible au tarif rouge !</p><br>
        <img src='images/ob_701971_refuser-d-epouser-un-pauvre.jpg' alt='image'>";
        $orange = "<p id='orange'>Vous êtes éligible au tarif orange !</p><br>
        <img src='images/2b0165f640ef63c238e5ab57925ae859.jpg' alt='image'>";
        $vert = "<p id='vert'>Vous êtes éligible au tarif vert !</p><br>
        <img src='images/thunes-possède.gif' alt='image'>";
        $bleu = "<p id='bleu'>Vous êtes éligible au tarif bleu !</p><br>
        <img src='images/ces-lamborghini-veneno-koenigsegg-one1-mclaren-p1-et-bugatti-veyron-font-partie-des-lots-phares-de-cette-vente-aux-encheres.jpg' alt='image'>";
        $valeur = 0;

        if(($age < 25 && $anciennete < 2 && $accident > 0) || ($age < 25 && $anciennete >= 2 && $accident > 1) || ($age >= 25 && $anciennete < 2 && $accident > 1) || ($age >= 25 && $anciennete >= 2 && $accident > 2)){
            $valeur = 0;
        }elseif(($age < 25 && $anciennete < 2 && $accident == 0) || ($age < 25 && $anciennete >= 2 && $accident == 1) || ($age >= 25 && $anciennete < 2 && $accident == 1) || ($age >= 25 && $anciennete >= 2 && $accident == 2)){
            $valeur = 1;
        }elseif(($age < 25 && $anciennete >= 2 && $accident == 0) || ($age >= 25 && $anciennete < 2 && $accident == 0) || ($age >= 25 && $anciennete >= 2 && $accident == 1)){
            $valeur = 2;
        }elseif($age >= 25 && $anciennete >= 2 && $accident == 0){
            $valeur = 3;
        }

        if($entree >= 5){
            $valeur++;
        }


        if($valeur == 0){
            echo $gris;
        }elseif($valeur == 1){
            echo $rouge;
        }elseif($valeur == 2){
            echo $orange;
        }elseif($valeur == 3){
            echo $vert;
        }elseif($valeur == 4){
            echo $bleu;
        }
    ?>
</body>
</html>