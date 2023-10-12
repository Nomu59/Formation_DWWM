<?php
    class Employe{
        protected $Matricule;
        protected $Nom;
        protected $Prenom;
        protected $DateEmbauche;

        public function __construct($Nom, $Prenom, $DateEmbauche)
        {
            $this -> Nom = $Nom;
            $this -> Prenom = $Prenom;
            $this -> DateEmbauche = $DateEmbauche;
        }

        public function calculerSalaire($ChiffreDAffaire, $TauxHoraire, $nombreHeures, $nbUniteProduites){}
    }
?>