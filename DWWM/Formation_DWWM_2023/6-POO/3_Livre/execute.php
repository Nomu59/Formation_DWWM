<?php
include "livre.class.php";

$titre = readline("Donner le titre: ");
$auteur = readline("Donner l'auteur: ");
$prix = readline("Donner le prix: ");

$livre = new Livre($titre, $auteur, $prix);
$livre->afficher();