<?php
    class EquipementProtection{
        private $Numero;
        private $Nom;
        private $Type;

        public function __construct($Numero, $Nom, $Type)
        {
            $this -> Numero = $Numero;
            $this -> Nom = $Nom;
            $this -> Type = $Type;
        }

        public function __toString()
        {
            return "Le numéro de l'équipement utilisé par l'employé est le numéro " . $this -> Numero . " son nom est " . $this -> Nom . " et son type est " . $this -> Type . ".";
        }
    }
?>