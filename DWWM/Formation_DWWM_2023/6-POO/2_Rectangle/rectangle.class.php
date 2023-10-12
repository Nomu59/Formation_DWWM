
<?php
class Rectangle
{
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    /**
     * Get the value of longueur
     */
    public function getLongueur(): float
    {
        return $this->longueur;
    }

    /*
     * Get the value of largeur
     */
    public function getLargeur(): float
    {
        return $this->largeur;
    }
    // Méthode pour calculer le périmètre
    public function perimetre(): float
    {
        return 2 * ($this->longueur + $this->largeur);
    }

    // Méthode pour calculer l'aire
    public function aire(): float
    {
        return $this->longueur * $this->largeur;
    }

    // Méthode pour vérifier si le rectangle est un carré
    public function estCarre(): bool
    {
        if ($this->longueur == $this->largeur) {
            return true;
        } else {
            return false;
        }
    }

    // Méthode pour afficher les caractéristiques du rectangle
    public function afficherRectangle(): void
    {
        echo "Longueur: " . $this->longueur . "\n";
        echo "largeur: " . $this->largeur . "\n";
        echo "perimetre: " . $this->perimetre() . "\n";
        echo "aire: " . $this->aire() . "\n";
        if ($this->estCarre() ) {
            echo "est un carré". "\n";
        }else
            echo "n'est pas un carré". "\n";
        }
}