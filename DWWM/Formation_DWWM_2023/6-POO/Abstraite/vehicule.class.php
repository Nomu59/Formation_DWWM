<?php
abstract class Vehicule
{
    private static $matricule = 0;
    private int $anneeModele;
    private float $prix;

    public function __construct(int $anneeModele, float $prix)
    {
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
        self::$matricule++;
    }

    abstract public function demarrer(): string;

    abstract public function accelerer(): string;

    public function __toString(): string
    {
        return "Matricule : " . self::$matricule . "\nAnnée du modele : " . $this->anneeModele . "\nPrix : " . $this->prix;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return self::$matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        self::$matricule = $matricule;

        return self;
    }

    /**
     * Get the value of anneeModele
     */ 
    public function getAnneeModele()
    {
        return $this->anneeModele;
    }

    /**
     * Set the value of anneeModele
     *
     * @return  self
     */ 
    public function setAnneeModele($anneeModele)
    {
        $this->anneeModele = $anneeModele;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}