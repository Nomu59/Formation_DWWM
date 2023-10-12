<?php
        class Nucleaire extends Employe{
            public function calculerSalaire($ChiffreDAffaire, $TauxHoraire, $nombreHeures, $nbUniteProduites){
                $BASE_PRIME_RISQUE = 20;
                $BASE_PRIME_NUCLEAIRE = 75;
                $Salaire = $nombreHeures * $TauxHoraire;
                $Prime = $nombreHeures * $BASE_PRIME_RISQUE + $BASE_PRIME_NUCLEAIRE;
                echo "Nucléaire : " . $this -> Nom . ", " . $this -> Prenom . " embauché le " . $this -> DateEmbauche . " , salaire mensuel de " . $Salaire . "&euro; , prime mensuel de " . $Prime . "&euro; , cet(te) employé est à risque. <br><br>";
            }
        }
?>