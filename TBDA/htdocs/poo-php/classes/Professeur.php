<?php
    class Professeur extends Employe{
        private $specialite;


        public function __construct($id, $nom, $prenom, $salaire, $specialite)
        {
            parent::__construct($id, $nom, $prenom, $salaire);
            $this -> specialite = $specialite;
        }

        public function toString(){
            echo "Je suis $this->nom $this->prenom mon salaire est: $this->salaire € ma spécialité est: $this->specialite <br>";
        }
    }
?>