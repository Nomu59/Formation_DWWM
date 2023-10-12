<?php
class Employe extends Personne
{
    protected float $salaire;

    public function __construct(string $nom, string $prenom, float $salaire)
    {
        parent::__construct($nom, $prenom);
        $this->salaire = $salaire;
    }

    public function __toString(): string
    {
        return parent::__toString() . "mon salaire est: " . $this->salaire . "euros ";
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}