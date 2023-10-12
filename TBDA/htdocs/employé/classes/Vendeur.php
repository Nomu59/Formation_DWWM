<?php
    class Vendeur extends Employe{

        public function calculerSalaire($ChiffreDAffaire, $TauxHoraire, $nombreHeures, $nbUniteProduites){
            $Salaire = $ChiffreDAffaire / 5 + 400;
            echo "Vendeur : " . $this -> Nom . ", " . $this -> Prenom . ", embauché le " . $this -> DateEmbauche . " , salaire mensuel de " . $Salaire . "&euro; <br><br>";
        }
    }
?>