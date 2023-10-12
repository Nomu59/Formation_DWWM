<?php
include "utilisateur.class.php";

class Profil
{
    private Utilisateur $utilisateur;
    private static $id = 0;
    private string $code;
    private string $libelle;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, string $code, string $libelle)
    {
        $this->utilisateur = new Utilisateur($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service);
        $this->code = $code;
        $this->libelle = $libelle;
        self::$id++;
    }

    public function affiche(): void
    {
        echo $this->utilisateur->affiche() . "Code : " . $this->code . "\nLibelle : " . $this->libelle . "\n";
    }

    public function getService(): string
    {
        return $this->utilisateur->getService();
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}