<?php
class Batiment
{
    protected string $adresse;
    protected float $superficie;

    public function __construct(string $adresse, $superficie)
    {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }

    public function __toString(): string
    {
        return "Ce bâtiment est situé à l'adresse " . $this->adresse;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of superficie
     */ 
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set the value of superficie
     *
     * @return  self
     */ 
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }
}