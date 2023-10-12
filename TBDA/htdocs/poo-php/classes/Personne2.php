<?php
    class Personne2{
        protected $id;
        protected $nom;
        protected $prenom;

        public function __construct($id, $nom, $prenom)
        {
            $this -> id = $id;
            $this -> nom = $nom;
            $this -> prenom = $prenom;
        }
}
?>