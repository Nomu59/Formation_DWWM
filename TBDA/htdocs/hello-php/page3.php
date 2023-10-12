<?php
    include("page2.php");


    // $_GET permet de récupérer les données venant d'un formulaire

    $prenom = $_GET["prenom"];
    echo $prenom;
    echo " ";


    // Exercice: récupérer le nom avec $_GET

    $nom = $_GET["nom"];
    echo $nom;
    echo "<br>";

    echo plusUn(20);
    echo "<br>";
    

    // Utilisation du $_GET pour l'age
    
    $age = $_GET["age"];
    echo $age;
?>