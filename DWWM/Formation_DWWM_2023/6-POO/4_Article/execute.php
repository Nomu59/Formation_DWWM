<?php
include "article.class.php";

// On déclare l'attribut static tauxTVA, cela permet de ne l'utiliser qu'une seule fois pour tout les objets ci-dessous
Article::$tauxTVA = readline("Donner le taux de TVA pour tous les articles: ");


// Premier objet:
// Déclaration des attributs
$reference = readline("Donner la référence: ");
$designation = readline("Donner la désignation: ");
$prixHT = readline("Donner le prix HT: ");

// Création de l'objet article
$article = new Article($reference, $designation, $prixHT);

// Affichage du résultat
echo "\n";
$article->afficherArticle();


// Deuxième objet
// Déclaration des attributs
$reference = readline("Donner la référence: ");
$designation = readline("Donner la désignation: ");
$prixHT = readline("Donner le prix HT: ");

// Création de l'objet article2
$article2 = new Article($reference, $designation, $prixHT);

// Affichage du résultat
echo "\n";
$article2->afficherArticle();