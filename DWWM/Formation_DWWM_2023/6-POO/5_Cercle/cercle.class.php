<?php
include "1_Point/point.class.php";

class Cercle
{
    private Point $centre;
    private Point $p;
    private int $rayon;

    public function __construct(int $abcisse, int $ordonnee, int $rayon, int $abcisseP, int $ordonneeP){
        $this->centre = new Point($abcisse, $ordonnee);
        $this->p = new Point($abcisseP, $ordonneeP);
        $this->rayon = $rayon;
    }

    public function afficherPoint(): void
    {
        echo "POINT(" . $this->p->getAbcisse() . "," . $this->p->getOrdonnee() . ")";
    }

    public function getPerimetre(): float
    {
        return 2 * pi() * $this->rayon;
    }

    public function getSurface(): float
    {
        return pi() * pow($this->rayon, 2);
    }

    public function appartient(): bool
    {
        $abcisseP = $this->p->getAbcisse();
        $ordonneeP = $this->p->getOrdonnee();

        $abcisseP -= $this->centre->getAbcisse();
        $ordonneeP -= $this->centre->getOrdonnee();
        $distance = sqrt(($abcisseP*$abcisseP)+($ordonneeP*$ordonneeP));
        if ($distance<= $this->rayon) {
            return true;
        } else {
            return false;
        }
    }

    public function afficherCercle(): void
    {
        echo "CERCLE(" . $this->centre->getAbcisse() . "," . $this->centre->getOrdonnee() . "," . $this->rayon . ")";
    }

    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Get the value of p
     */ 
    public function getP()
    {
        return $this->p;
    }

    /**
     * Set the value of p
     *
     * @return  self
     */ 
    public function setP($p)
    {
        $this->p = $p;

        return $this;
    }

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}