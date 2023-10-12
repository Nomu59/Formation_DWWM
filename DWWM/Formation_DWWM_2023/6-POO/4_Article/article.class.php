<?php
class Article
{
    private float $reference;
    private string $designation;
    private float $prixHT;
    public static float $tauxTVA;
    public static int $nbArticle = 0;

    public function __construct(float $reference, string $designation, float $prixHT)
    {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHT = $prixHT;

        // Incrémentation de l'attribut static nbArticle
        self::$nbArticle++;
    }

    /**
     * Get the value of reference
     */ 
    public function getReference(): float
    {
        return $this->reference;
    }

    /**
     * Get the value of designation
     */ 
    public function getDesignation(): string
    {
        return $this->designation;
    }

    /**
     * Get the value of prixHT
     */ 
    public function getPrixHT(): float
    {
        return $this->prixHT;
    }

    /**
     * Get the value of tauxTVA
     */ 
    public function getTauxTVA(): float
    {
        return self::$tauxTVA;
    }

    /**
     * Get the value of nbArticle
     */ 
    public function getNbArticle()
    {
        return $this->nbArticle;
    }

    // Méthode pour calculer le prix TTC d'un article
    public function calculerPrixTTC() : float
    {
        return $this->prixHT + ($this->prixHT * self::$tauxTVA / 100);
    }

    // Méthode pour afficher les informations de l'article
    public function afficherArticle(): void
    {
        echo "Article " . self::$nbArticle . ": \n";
        echo "Référence: " . $this->reference . "\n";
        echo "Désignation: " . $this->designation . "\n";
        echo "Prix HT: " . $this->prixHT . "\n";
        echo "Prix TTC: " . $this->calculerPrixTTC() . "\n";
    }
}