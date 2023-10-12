<?php
include "personne.class.php";
include "profil.class.php";

// Demander le nombre d'utilisateurs souhaités
$nbUtilisateur = readline("Combien d'utilisateurs souhaites-tu ajouter ? ");

// Array contenant la liste des profils
$listeProfil = array("Chef de projet", "Manager", "Directeur de projet", "Directeur des ressources humaines", "Directeur général");

// Array contenant la liste des libelle des profils
$listeLibelle =  array("CP", "MN", "DP", "DRH", "DG");

// Array vide futur conteneur de la liste des utilisateurs
$listeUtilisateur = array();

// Boucle afin d'insérer le nombre demandé d'utilisateurs
for ($i=0; $i < $nbUtilisateur; $i++) { 
    $j = 0;
    $nom = readline("Nom : ");
    $prenom = readline("Prénom : ");
    $mail = readline("Mail : ");
    $telephone = readline("Téléphone : ");
    $salaire = readline("Salaire : ");
    $login = readline("Nom d'utilisateur : ");
    $password = readline("Mot de passe : ");
    $service = readline("Service : ");
    foreach ($listeProfil as $key => $value) {
        if ($service == $value) {
            $code = $j;
            $libelle = $listeLibelle[$j];
        }
        $j++;
    }
    $listeUtilisateur[$i] = new Profil($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $code, $libelle);
} 

// Double boucle qui, pour chaque profil existant, énumère tout les utilisateurs crées et affiche ceux du profil correspondant
foreach ($listeProfil as $key => $value) {
    echo $value . " : \n\n";
    for ($i=0; $i < count($listeUtilisateur); $i++) { 
        if ($listeUtilisateur[$i]->getService() == $value) {
            $listeUtilisateur[$i]->affiche();
        }
    }
}