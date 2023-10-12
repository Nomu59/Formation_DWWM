<?php
    class Carre extends Forme{
        public function calculerAire($longueur, $largeur)
        {
            $largeur = $longueur;
            echo "L'aire du carré est :".$longueur * $largeur." km<br>";
        }

        public function calculerPerimetre($longueur, $largeur)
        {
            $largeur = 4;
            echo "Le périmètre du carré est :".$longueur * $largeur." km<br><br>";
        }
    }
?>