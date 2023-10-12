<?php
    /* Exercice 3 : Créer une classe Animal qui a pour attributs :
        - nbPattes
        - espece
        - poids
        - taille
        - crie
        - nourriture

    Et pour méthode :
        - crier
        - manger
        - boire
        - decrire (donner son espèce, son poids, sa taille)
        - seDeplacer (donner son nombre de pattes)

    Une fois créée, faire un chien, une vache et un moineau


    BONUS :

    Trouvez un moyen d'utiliser les méthodes de chaque animal sans trop vous répéter (dans la mesure du possible)
    */

    class Animal{
        private $nbPattes;
        private $espece;
        private $poids;
        private $taille;
        private $crie;
        private $nourriture;

        public function __construct($nbPattes, $espece, $poids, $taille, $crie, $nourriture){
            $this -> nbPattes = $nbPattes;
            $this -> espece = $espece;
            $this -> poids = $poids;
            $this -> taille = $taille;
            $this -> crie = $crie;
            $this -> nourriture = $nourriture;
        }

        public function crier(){
            echo "Cet animal $this->crie.<br>";
        }

        public function manger(){
            echo "Cet animal mange la nourriture: $this->nourriture.<br>";
        }

        public function boire(){
            echo "Il/elle boit<br>";
        }

        public function decrire(){
            echo "L'animal est un(e) $this->espece, cet animal pèse $this->poids kg et mesure $this->taille mètre(s).<br>";
        }

        public function seDeplacer(){
            echo "Cet animal a $this->nbPattes pattes.<br><br>";
        }

        /**
         * Get the value of nbPattes
         */ 
        public function getNbPattes()
        {
                return $this->nbPattes;
        }

        /**
         * Set the value of nbPattes
         *
         * @return  self
         */ 
        public function setNbPattes($nbPattes)
        {
                $this->nbPattes = $nbPattes;

                return $this;
        }

        /**
         * Get the value of espece
         */ 
        public function getEspece()
        {
                return $this->espece;
        }

        /**
         * Set the value of espece
         *
         * @return  self
         */ 
        public function setEspece($espece)
        {
                $this->espece = $espece;

                return $this;
        }

        /**
         * Get the value of poids
         */ 
        public function getPoids()
        {
                return $this->poids;
        }

        /**
         * Set the value of poids
         *
         * @return  self
         */ 
        public function setPoids($poids)
        {
                $this->poids = $poids;

                return $this;
        }

        /**
         * Get the value of taille
         */ 
        public function getTaille()
        {
                return $this->taille;
        }

        /**
         * Set the value of taille
         *
         * @return  self
         */ 
        public function setTaille($taille)
        {
                $this->taille = $taille;

                return $this;
        }

        /**
         * Get the value of crie
         */ 
        public function getCrie()
        {
                return $this->crie;
        }

        /**
         * Set the value of crie
         *
         * @return  self
         */ 
        public function setCrie($crie)
        {
                $this->crie = $crie;

                return $this;
        }

        /**
         * Get the value of nourriture
         */ 
        public function getNourriture()
        {
                return $this->nourriture;
        }

        /**
         * Set the value of nourriture
         *
         * @return  self
         */ 
        public function setNourriture($nourriture)
        {
                $this->nourriture = $nourriture;

                return $this;
        }
    }
?>