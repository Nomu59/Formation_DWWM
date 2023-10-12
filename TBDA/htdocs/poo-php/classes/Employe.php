<?php
    class Employe extends Personne2{
        protected $salaire;


        public function __construct($id, $nom, $prenom, $salaire)
        {
            parent::__construct($id, $nom, $prenom);
            $this -> salaire = $salaire;
        }

        public function toString(){
            echo "Je suis $this->nom $this->prenom mon salaire est: $this->salaire € <br>";
        }
    }
?>