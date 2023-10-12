<?php
            /* Exercice 1 : Créer une classe Voiture avec les attributs suivants:
            - marque
            - modele
            - couleur
            - prix
            - carburant

            Exercice 2 : créer :
                - une méthode decrire() qui va décrire la voiture (montrez tout les attributs)
                -une méthode demarrer qui va envoyer "Vroum"
                -une mtéthode baisserPrix qui va diminuer le prix de 10% (multiplier le prix par 0.9)
            */

            class Voiture{
                private $marque;
                private $modele;
                private $couleur;
                private $prix;
                private $carburant;
    
                public function __construct($marque, $modele, $couleur, $prix, $carburant){
                    $this -> marque = $marque;
                    $this -> modele = $modele;
                    $this -> couleur = $couleur;
                    $this -> prix = $prix;
                    $this -> carburant = $carburant;
                }
    
                public function decrire(){
                    echo "La voiture est une $this->marque $this->modele $this->couleur vendue au prix de $this->prix euros utilisant le carburant $this->carburant";
                }
    
                public function demarrer(){
                    echo "Vroum";
                }
    
                public function baisserPrix(){
                    $this -> prix *= 0.9;
                    echo $this -> prix;
                }
    
    
                // Méthodes magiques pour le getter et le setter
    
                public function __get($att){
                    return $this -> $att;
                }
    
                public function __set($att, $val){
                    $this -> $att = $val;
                }
            }
?>