<?php
include "compte.class.php";

// Premier objet
// Déclaration des attributs
$solde = 0;
$cin = readline("Donner le CIN: ");
$nom = readline("Donner le nom: ");
$prenom = readline("Donner le prénom: ");
$tel = readline("Donner le numéro de téléphone: ");

// Création de l'objet compte
$compte = new Compte($solde, $cin, $nom, $prenom, $tel);

// Affichage des résultats
echo $compte->crediter(1000);
echo "\n";
echo $compte->debiter(1000);
echo "\n";


// Deuième objet
// Déclaration des attributs
$solde = 0;
$cin = readline("Donner le CIN: ");
$nom = readline("Donner le nom: ");
$prenom = readline("Donner le prénom: ");
$tel = readline("Donner le numéro de téléphone: ");

// Création d'un second objet compte2
$compte2 = new Compte($solde, $cin, $nom, $prenom, $tel);

// Affichage des résultats
$compte2->crediterCpt(100, $compte);
echo "\n";
$compte2->debiterCpt(1000, $compte);
echo "\n";

echo $compte2->afficher();
echo "nombre de comptes crées: " . $compte2->nbCompte();