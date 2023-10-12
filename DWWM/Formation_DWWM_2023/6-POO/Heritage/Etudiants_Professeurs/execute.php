<?php
// Inclusion de toutes les classes
include "personne.class.php";
include "etudiant.class.php";
include "employe.class.php";
include "professeur.class.php";

// Création de deux étudiants
$obaka = new Etudiant("OBAKA", "Med", 65678754);
$alseny = new Etudiant("ALSENY", "Thomas", 87543543);

// Création de deux employés
$douk = new Employe("DOUK", "Rachid", 10000.0);
$ngoye = new Employe("NGOYE", "Roland", 10000.0);

// Création de deux professeurs
$oba = new Professeur("OBA", "Kevin", 5700.0, "JAVA/JEE");
$magassouba = new Professeur("MAGASSOUBA", "Cheick", 5000.0, "PHP");

// Affichage du résultat
echo "La liste des employes :\n";
echo $douk;
echo "\n";

echo $ngoye;
echo "\n\n";

echo "La liste des étudiants :\n";
echo $obaka;
echo "\n";

echo $alseny;
echo "\n\n";

echo "La liste des professeurs :\n";
echo $oba;
echo "\n";

echo $magassouba;