<?php
    // Démo 2 : classe Personne

    class Personne{
        // public $nom;
        // public $prenom;
        // public $age;
        protected $nom;
        protected $prenom;
        protected $age;

        public function __construct($nom, $prenom, $age){
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> age = $age;
        }

        public function sePresenter(){
            echo "Bonjour, je m'appelle $this->prenom $this->nom";
        }

        public function donnerAge(){
            echo "J'ai $this -> age ans";
        }


        // getter et setter pour $nom

        public function getNom(){
            return $this -> nom;
        }

        public function setNom($newNom){
            $this -> nom = $newNom;
        }


        // Exercice : faire les getters et setters pour le prenom et l'age

        // getter et setter pour $prenom

        public function getPrenom(){
            return $this -> prenom;
        }

        public function setPrenom($newPrenom){
            $this -> prenom = $newPrenom;
        }


        // getter et setter pôur $age

        public function getAge(){
            return $this -> age;
        }

        public function setAge($newAge){
            $this -> age = $newAge;
        }

        function __toString()
        {
            return "Bonjour, je m'appelle " . $this -> nom . " " . $this -> prenom . " et j'ai " . number_format($this -> age, 2, ".", " ") . " ans.";
        }
    }

    $moi = new Personne("BOUCHER", "Alex", 2100000.01);
    echo $moi;
?>