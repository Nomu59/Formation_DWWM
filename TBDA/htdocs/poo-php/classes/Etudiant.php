<?php
    class Etudiant extends Personne2{
        private $cne;


        public function __construct($id, $nom, $prenom, $cne)
        {
            parent::__construct($id, $nom, $prenom);
            $this -> cne = $cne;
        }

        public function toString(){
            echo "Je suis $this->nom $this->prenom mon CNE est: $this->cne <br>";
        }
    }
?>