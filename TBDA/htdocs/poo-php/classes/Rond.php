<?php
    class Rond extends Forme{
        public function calculerAire($longueur, $largeur)
        {
            $largeur = 3.14;
            echo "L'aire du rond est :".$longueur * $longueur * $largeur." km<br>";
        }

        public function calculerPerimetre($longueur, $largeur)
        {
            $largeur = 3.14;
            echo "Le périmètre du rond est :".$longueur * 2 * $largeur." km<br><br>";
        }
    }
?>