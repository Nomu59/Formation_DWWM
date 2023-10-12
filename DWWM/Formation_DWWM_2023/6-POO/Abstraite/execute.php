<?php
include "vehicule.class.php";
include "camion.class.php";
include "voiture.class.php";

$anneeModele = 1969;
$prix = 5900;

$camion = new Camion($anneeModele, $prix);

echo $camion->accelerer() . "\n";
echo $camion->demarrer() . "\n";

$anneeModele = 2019;
$prix = 8600;

$voiture = new Voiture($anneeModele, $prix);

echo $voiture->accelerer() . "\n";
echo $voiture->demarrer();