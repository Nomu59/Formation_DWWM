<?php
include "employe.class.php";

// Déclaration des attributs
$matricule = readline("Matricule: ");
$nom = readline("Nom: ");
$prenom = readline("prenom: ");
$dateNaissance = readline("Date de naissance (jj/mm/aaaa): ");
$dateEmbauche = readline("Date embauche (jj/mm/aaaa): ");
$salaire = readline("Salaire: ");

// Création de l'objet employe
$employe = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

// Affichage du résultat
echo $employe->afficherEmploye();