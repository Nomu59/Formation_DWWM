<?php
    class CompteEpargne extends CompteBancaire{
        private $nom;
        private $prenom;
        private $solde;
        private $plancher;
        public function __construct($nom, $prenom, $solde, $plancher)
        {
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> solde = $solde;
            $this -> plancher = $plancher;
        }
        public function getSolde()
        {
            echo "Votre solde est de $this->solde &euro;. <br><br>";
        }

        public function getTitulaire()
        {
            echo "Vous êtes $this->nom $this->prenom. <br><br>";
        }

        public function debiter($montant)
        {
            if($this -> solde - $montant < $this -> plancher){
                echo "Votre solde actuel ne permet pas de débiter cette somme car cela dépasse votre plancher autorisé qui est de $this->plancher. <br><br>";
            }else{
                $this -> solde -= $montant;
                echo "Votre compte a été débité de $montant &euro;, il reste $this->solde &euro; sur votre compte. <br><br>";
            }
        }

        public function crediter($montant)
        {
            $this -> solde += $montant;
            echo "Votre compte a été crédité de $montant &euro;, il y a maintenant $this->solde &euro; sur votre compte. <br><br>";
        }
    }
?>