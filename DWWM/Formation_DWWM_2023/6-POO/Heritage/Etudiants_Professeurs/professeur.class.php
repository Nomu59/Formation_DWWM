<?php
class Professeur extends Employe
{
    private string $specialite;

    public function __construct(string $nom, string $prenom, float $salaire, string $specialite)
    {
        parent::__construct($nom, $prenom, $salaire);
        $this->specialite = $specialite;
    }

    public function __toString(): string
    {
        return parent::__toString() . "ma spécialité est: " . $this->specialite;
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}