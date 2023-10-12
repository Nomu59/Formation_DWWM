<?php
include "filiere.class.php";

// Demander le nombre d'étudiants souhaités
$nbEtudiant = readline("Combien d'étudiant souhaites-tu ajouter ? ");

// Array vide futur conteneur de la liste des étudiants
$listeEtudiant = array();

// Boucle afin d'insérer le nombre demandé d'étudiants
for ($i=0; $i < $nbEtudiant; $i++) { 
    $nom = readline("Nom : ");
    $prenom = readline("Prénom : ");
    $dateNaissance = readline("date de naissance : ");
    $listeEtudiant[$i] = new Etudiant($nom, $prenom, $dateNaissance);
} 

echo $listeEtudiant[1];

// Demander le nombre de filières souhaités
$nbFiliere = readline("Combien de filières souhaites-tu ajouter ? ");

// Array vide futur conteneur de la liste des filières
$listeFiliere = array();

// Boucle afin d'insérer le nombre demandé de filières
for ($i=0; $i < $nbFiliere; $i++) { 
    $libelle = readline("Nom de la filière : ");
    $code = readline("code de la filière : ");
    $listeFiliere[$i] = array($libelle, $code);
} 

print_r ($listeFiliere[1]);

$affectation = readline("Souhaites-tu mettre " . $listeEtudiant[0]->getNom() . " dans une catégorie ? ");
echo $affectation;

if ($affectation == "oui") {
    
} else {
    
}

// $inf = array($etudiant1, $etudiant2);
// $tic = array($etudiant3);
// $gc = array($etudiant4, $etudiant5);

// // Création de 3 objets filiere
// $filiere1 = new Filiere($etudiant1->getNom(), $etudiant1->getPrenom(), $etudiant1->getDateNaissance(), "INF", "Informatique");
// $filiere2 = new Filiere($etudiant3->getNom(), $etudiant3->getPrenom(), $etudiant3->getDateNaissance(), "TIC", "Techno de l'info et de communication");
// $filiere3 = new Filiere($etudiant4->getNom(), $etudiant4->getPrenom(), $etudiant4->getDateNaissance(), "GC", "Génie civil");


// // Affichage du résultat
// echo "La liste de filières de notre école : \n\n";
// echo $filiere1->__toString();
// echo $filiere2->__toString();
// echo $filiere3->__toString();
// echo "\n";
// echo "Liste des étudiants par filière : \n\n";
// echo $filiere1->__toString();
// echo $etudiant1->__toString();
// echo $etudiant2->__toString() . "\n";
// echo $filiere2->__toString();
// echo $etudiant3->__toString() . "\n";
// echo $filiere3->__toString();
// echo $etudiant4->__toString();
// echo $etudiant5->__toString();