<?php
class Voiture extends Vehicule
{
    public function __construct(int $anneeModele, float $prix)
    {
    parent::__construct($anneeModele, $prix);
    }

    public function accelerer(): string
    {
        return "La voiture matriculé : " . parent::getMatricule() . " accélère.";
    }

    public function demarrer(): string
    {
        return "La voiture matriculé : " . parent::getMatricule() . " démarre.";
    }
}