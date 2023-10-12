<?php
include "cercle.class.php";

// Déclaration des attributs
$abcisse = readline("Donner l'abscisse du centre: ");
$ordonnee = readline("Donner l'ordonnée du centre: ");
$rayon = readline("Donner le rayon: ");
$abcisseP = readline("Donner l'abcisse du point: ");
$ordonneeP = readline("Donner l'ordonne du point: ");

// Création de l'objet Cercle
$cercle = new Cercle($abcisse, $ordonnee, $rayon, $abcisseP, $ordonneeP);

// Affichage des dimensions du cercle
$cercle->afficherCercle();
echo "\n";

// Affichage du périmètre du cercle
echo $cercle->getPerimetre();
echo "\n";

// Affichage de la surface du cercle
echo $cercle->getSurface();
echo "\n";

// Affichage des coordonnées du point
$cercle->afficherPoint();
echo "\n";

// Vérification de l'appartenance du point au cercle
if ($cercle->appartient()) {
    echo "Le point appartient au cercle";
} else {
    echo "Le point n'appartient pas au cercle";
}