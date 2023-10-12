<?php
    /* La classe Chien doit hériter de Animal
    Elle a pour attribut supplémentaire :
        - jouet
        - nom
        - race
    
    Elle ne réécrit pas de méthode mais elle en possède des nouvelles :
        - jouer (qui va écrire : joue avec l'attribut jouet)
        - appelerChien (qui va écrire son nom)
        - decrireRace (qui va écrire ex : "Medor est un labrador")
    */

        class Chien extends Animal{
        private $jouet;
        private $nom;
        private $race;

        public function __construct($jouet, $nom, $race)
        {
            $this -> jouet = $jouet;
            $this -> nom = $nom;
            $this -> race = $race;
        }

        public function jouer(){
            echo "Joue avec un/une $this->jouet <br><br>";
        }

        public function appelerChien(){
            echo "Le chien s'appelle $this->nom <br><br>";
        }

        public function decrireRace(){
            echo "$this->nom est un/une $this->race <br><br>";
        }
    }
?>