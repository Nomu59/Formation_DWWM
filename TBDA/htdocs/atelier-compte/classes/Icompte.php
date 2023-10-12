<?php
    interface Icompte{
        public function getSolde();
        public function getTitulaire();
        public function debiter($montant);
        public function crediter($montant);
    }
?>