<?php
class Livre
{
    private string $titre;
    private string $auteur;
    private float $prix;

    public function __construct(string $titre, string $auteur, float $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix(): float
    {
        return $this->prix;
    }

    // Méthode pour afficher les informations du livre en cours
    public function afficher(): void
    {
        echo "Titre: " . $this->titre . "\n";
        echo "Auteur: " . $this->auteur . "\n";
        echo "Prix: " . $this->prix . "\n";
    }
}