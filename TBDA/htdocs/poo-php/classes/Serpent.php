<?php
    /* La classe Serpent doit hériter de Animal
    Elle a pour attribut supplémentaire :
        - race
    
    Elle réécrit des méthodes :
        - seDeplacer doit répondre "il rampe"
        - manger doit répondre "il gobe sa proie"
    */

    class Serpent extends Animal{
        private $race;

        public function __construct($race)
        {
            $this -> race = $race;
        }

        public function seDeplacer()
        {
            echo "Il rampe <br><br>";
        }

        public function manger()
        {
            echo "Il gobe sa proie <br><br>";
        }
    }
?>