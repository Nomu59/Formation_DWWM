<?php
include "filiere.class.php";

// Création de 5 objets etudiant
$etudiant1 = new Etudiant("Rashid", "Mohamed", "1995/01/02");
$etudiant2 = new Etudiant("Yves", "Chakib", "1992/04/02");
$etudiant3 = new Etudiant("Martin", "Manal", "2011/03/02");
$etudiant4 = new Etudiant("Jacques", "Meriem", "2000/11/02");
$etudiant5 = new Etudiant("Rami", "Mouad", "2013/01/02");

// $inf = array($etudiant1, $etudiant2);
// $tic = array($etudiant3);
// $gc = array($etudiant4, $etudiant5);

// Création de 3 objets filiere
$filiere1 = new Filiere($etudiant1->getNom(), $etudiant1->getPrenom(), $etudiant1->getDateNaissance(), "INF", "Informatique");
$filiere2 = new Filiere($etudiant3->getNom(), $etudiant3->getPrenom(), $etudiant3->getDateNaissance(), "TIC", "Techno de l'info et de communication");
$filiere3 = new Filiere($etudiant4->getNom(), $etudiant4->getPrenom(), $etudiant4->getDateNaissance(), "GC", "Génie civil");


// Affichage du résultat
echo "La liste de filières de notre école : \n\n";
echo $filiere1->__toString();
echo $filiere2->__toString();
echo $filiere3->__toString();
echo "\n";
echo "Liste des étudiants par filière : \n\n";
echo $filiere1->__toString();
echo $etudiant1->__toString();
echo $etudiant2->__toString() . "\n";
echo $filiere2->__toString();
echo $etudiant3->__toString() . "\n";
echo $filiere3->__toString();
echo $etudiant4->__toString();
echo $etudiant5->__toString();