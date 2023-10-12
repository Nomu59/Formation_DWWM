<?php
    // Création de la classe Compte

    class Compte
    {
        // Attributs

        // public $solde;
        // public $titulaire;
        // Auparavant nous avons mis en public, l'attribut était donc disponible de par l'objet. Pour des raisons de sécurité, il est préférable de mettre en private

        protected $solde;
        public $titulaire;
        private $decouvert;


        // Méthodes

        // le constructeur de la classe Compte

        public function __construct($titulaire, $depot, $decouvert){
            $this -> titulaire = $titulaire;
            $this -> solde = $depot;
            $this -> decouvert = $decouvert;
        }


        // Déclaration d'une méthode

        public function crediter($credit){
            return $this -> solde  += $credit;
        }

        private function afficherDecouvertPossible(){
            echo $this -> decouvert;
        }


        // Déclaration des accesseurs

        // get

        public function getSolde(){
            return $this -> solde;
        }


        // set

        public function setSolde($newSolde){
            $this -> solde = $newSolde;
        }


        // Déclaration du get et du set de l'attribut $titulaire

        // get

        public function getTitulaire(){
            return $this -> titulaire;
        }


        // set

        public function setTitulaire($newTitulaire){
            $this -> titulaire = $newTitulaire;
        }

        /**
         * Get the value of decouvert
         */ 
        public function getDecouvert()
        {
                return $this->decouvert;
        }

        /**
         * Set the value of decouvert
         *
         * @return  self
         */ 
        public function setDecouvert($decouvert)
        {
                $this->decouvert = $decouvert;

                return $this;
        }
        
        
        // déclaration de la méthode __toString()

        function __toString()
        {
            return "le solde de votre compte est de " . number_format($this -> solde, 2, ",", " ") . "&euro;";
        }
    }

    $monCompte = new Compte("David", 1500000.978, 200);
    echo $monCompte;

?>