<?php
class Camion extends Vehicule
{
    public function __construct(int $anneeModele, float $prix)
    {
    parent::__construct($anneeModele, $prix);
    }

    public function accelerer(): string
    {
        return "Le camion matriculé : " . parent::getMatricule() . " accélère.";
    }

    public function demarrer(): string
    {
        return "Le camion matriculé : " . parent::getMatricule() . " démarre.";
    }
}