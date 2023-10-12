<?php
include "etudiant.class.php";

class Filiere
{
    private static int $id = 0;
    private string $code;
    private string $libelle;
    private Etudiant $etudiant;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $code, string $libelle)
    {
        $this->etudiant = new Etudiant($nom, $prenom, $dateNaissance);
        $this->code = $code;
        $this->libelle = $libelle;
        
        self::$id++;
    }

    public function __toString()
    {
        return "Filière : " . $this->libelle . "\n";
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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