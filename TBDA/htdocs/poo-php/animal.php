<?php
        $nbPattes = $_GET["nbPattes"];
        $espece = $_GET["espece"];
        $poids = $_GET["poids"];
        $taille = $_GET["taille"];
        $crie = $_GET["crie"];
        $nourriture = $_GET["nourriture"];

        echo "cet animal est un(e) $espece, il/elle a $nbPattes pattes, pèse $poids kg, mesure $taille m, son cri est un(e) $crie, sa nourriture principale est la nourriture: $nourriture, il boit.";
    ?>