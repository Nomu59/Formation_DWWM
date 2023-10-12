<?php
    class Triangle extends Forme{

        public function calculerAire($longueur, $largeur)
        {
            echo "L'aire du triangle est :".($longueur * $largeur) / 2 ." km<br>";
        }

        public function calculerPerimetre($longueur, $largeur)
        {
            echo "Le périmètre du triangle est :".$longueur + $largeur + 1000 ." km<br><br>";
        }
    }
?>