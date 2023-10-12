<?php
include "client.class.php";

class Compte{
    private float $solde = 0;
    private static int $code = 0;
    private Client $client;

    public function __construct(float $solde, string $cin, string $nom, string $prenom, int $tel)
    {
        $this->solde = $solde;
        $this->client = new Client($cin, $nom, $prenom, $tel);
        
        self::$code++;
        $this->nbCompte = self::$code;
    }

    public function crediter($somme): float
    {
        return $this->solde += $somme;
    }
    
    public function crediterCpt($somme, $compte): float
    {
        $compte->debiter($somme);
        return $this->solde += $somme;
    }
    
    public function debiter($somme): float
    {
        if ($somme > $this->solde) {
            return $this->solde;
        } else {
            return $this->solde -= $somme;
        }
    }

    public function debiterCpt($somme, $compte): float
    {
        $compte->crediter($somme);
        return $this->solde-= $somme;
    }

    public function afficher(): void
    {
        echo "Détails du compte: \n";
        echo "************************ \n";
        echo "Numéro du compte: " . $this->nbCompte . "\n";
        echo "Solde du compte: " . $this->solde . "\n";
        $this->client->afficher();
    }

    public function nbCompte(): int
    {
        return self::$code;
    }
    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}