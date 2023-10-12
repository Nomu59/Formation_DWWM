<?php
    class Producteur extends Employe{
        public function calculerSalaire($ChiffreDAffaire, $TauxHoraire, $nombreHeures, $nbUniteProduites){
            $Salaire = $nbUniteProduites * 5;
            echo "Producteur : " . $this -> Nom . ", " . $this -> Prenom . " embauché le " . $this -> DateEmbauche . " , salaire mensuel de " . $Salaire . "&euro; <br><br>";
        }
    }
?>