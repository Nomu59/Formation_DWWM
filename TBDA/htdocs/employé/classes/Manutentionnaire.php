<?php
    class Manutentionnaire extends Employe{
        public function calculerSalaire($ChiffreDAffaire, $TauxHoraire, $nombreHeures, $nbUniteProduites){
            $Salaire = $nombreHeures * $TauxHoraire;
            echo "Manutentionnaire : " . $this -> Nom . ", " . $this -> Prenom . " embauché le " . $this -> DateEmbauche . " , salaire mensuel de " . $Salaire . "&euro; <br><br>";
        }
    }
?>