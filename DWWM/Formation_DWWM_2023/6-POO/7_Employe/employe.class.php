<?php
class employe
{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;

    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaissance, string $dateEmbauche, float $salaire)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    public function age(): string
    {
        $aujourdhui = date("Y/m/d");
        $age = date_diff(date_create($this->dateNaissance), date_create($aujourdhui));
        return $age->format('%Y');
    }

    public function anciennete(): string
    {
        $aujourdhui = date("Y/m/d");
        $anciennete = date_diff(date_create($this->dateEmbauche), date_create($aujourdhui));
        return $anciennete->format('%Y');
    }

    public function augmentationDuSalaire(): float
    {
        $anciennete = $this->anciennete();
        if ($anciennete < 5) {
            return $this->salaire *= 1.02;
        } elseif ($anciennete < 10) {
            return $this->salaire *= 1.05;
        } else {
            return $this->salaire *= 1.10;
        }
    }

    public function afficherEmploye(): void
    {
        echo "- Matricule : " . $this->matricule . "\n";
        echo "- Nom complet : " . strtoupper($this->nom) . " " . ucfirst($this->prenom) . "\n";
        echo "- Age : " . $this->age() . "\n";
        echo "- Anciennete : " . $this->anciennete() . "\n";
        echo "- Salaire : " . $this->salaire . "\n";
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
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