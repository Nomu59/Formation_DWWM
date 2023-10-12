<?php
    class Secteur{
        private $codeSecteur;
        private $nomSecteur;

        /**
         * Get the value of nomSecteur
         */ 
        public function getNomSecteur()
        {
                return $this->nomSecteur;
        }

        /**
         * Set the value of nomSecteur
         *
         * @return  self
         */ 
        public function setNomSecteur($nomSecteur)
        {
                $this->nomSecteur = $nomSecteur;

                return $this;
        }

        /**
         * Get the value of codeSecteur
         */ 
        public function getCodeSecteur()
        {
                return $this->codeSecteur;
        }

        /**
         * Set the value of codeSecteur
         *
         * @return  self
         */ 
        public function setCodeSecteur($codeSecteur)
        {
                $this->codeSecteur = $codeSecteur;

                return $this;
        }

        public function __toString()
        {
            return "Cet employé fait parti du secteur " . $this -> nomSecteur . " dont le code secteur est : " . $this -> codeSecteur . ". <br><br>";
        }

        public function ajouterEmploye($employe){
            echo "L'employé " . $employe . " a été ajouté à la base de données. <br><br>";
        }
    }
?>