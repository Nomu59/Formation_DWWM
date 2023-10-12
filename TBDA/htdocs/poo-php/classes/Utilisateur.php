<?php
    class Utilisateur extends Personne{
        private $connexion = false;

        public function seConnecter(){
            $this -> connexion = true;
        }

        public function seDeconnecter(){
            $this -> connexion = false;
        }

        public function sePresenter(){
            echo "Je suis un utilisateur du nom de $this->nom";
        }

        /**
         * Get the value of connexion
         */ 
        public function getConnexion()
        {
                return $this->connexion;
        }

        /**
         * Set the value of connexion
         *
         * @return  self
         */ 
        public function setConnexion($connexion)
        {
                $this->connexion = $connexion;

                return $this;
        }
    }
?>