<?php
    include("Compte.php");
    class LivretA extends Compte{
        public $taux;

        public function __construct($taux){
            $this -> taux = $taux;
        }

        public function afficherLivret(){
            echo "Le livret est à la possession de $this->titulaire, le solde et de $this->solde";


            // $this -> decouvert ne peut pas être utilisé car la classe mère a cet attribut en private

            // $this -> titulaire et $this -> solde sont quant à eux disponible car ils sont des attributs public ou protected
        }


        // Cette méthode est une réécriture de la méthode de la classe mère Compte

        public function crediter($credit){
            if($this -> solde <= 0){
                echo "Le livret est vide ou un solde négatif";
            }

            return $this -> solde += $credit;
        }


        // Cette méthode n'est pas la réécriture de la classe mère car la méthode de la classe mère est private

        private function afficherDecouvertPossible(){
            echo "Les livrets ne disposent pas de découvert";
        }
    }
?>