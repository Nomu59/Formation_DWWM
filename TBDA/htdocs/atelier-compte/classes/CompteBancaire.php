<?php
    abstract class CompteBancaire implements Icompte{
        abstract function getSolde();
        abstract function getTitulaire();
        abstract function debiter($montant);
        abstract function crediter($montant);
    }
?>