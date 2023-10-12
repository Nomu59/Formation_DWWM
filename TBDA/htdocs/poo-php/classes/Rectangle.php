<?php
    class Rectangle extends Forme{
        public function calculerAire($longueur, $largeur)
        {
            echo "L'aire du rectangle est :".$longueur * $largeur." km<br>";
        }

        public function calculerPerimetre($longueur, $largeur)
        {
            echo "Le périmètre du rectangle est :".$longueur * 2 + $largeur * 2 ." km<br><br>";
        }
    }
?>