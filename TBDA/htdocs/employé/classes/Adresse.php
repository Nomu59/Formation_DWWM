<?php
    Class Adresse{
        private $Id;
        private $Ville;
        private $Rue;
        private $Numero;
        private $Cp;


        public function __construct($Id, $Ville, $Rue, $Numero, $Cp)
        {
            $this -> Id = $Id;
            $this -> Ville = $Ville;
            $this -> Rue = $Rue;
            $this -> Numero = $Numero;
            $this -> Cp = $Cp;
        }

        public function __toString()
        {
            return "L'Id de l'employé est : " . $this -> Id . " et son adresse est : " . $this -> Numero . " " . $this -> Rue . " " . $this -> Cp . " " . $this -> Ville . ". <br><br>";
        }
    }
?>