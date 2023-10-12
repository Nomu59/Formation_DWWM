<?php
// Même chose que le include
require_once '../Modele/functions.php';

// Lance une session qui execute tout ce qui se trouve entre session_start() et header()
session_start();

// Chargement de la liste des students et stockage dans la variable studentList
$studentList = loadStudentsFromFile('../ListeStagiaire.txt');

// Mélanger les stagiaires et stocker le résultat dans la variable studentList
$studentList = shufflePositions($studentList);

// Création d'un $_SESSION pour pouvoir réutiliser la variable dans le document indiqué par le header(), cette variable sert à afficher chaque ligne du tableau mélangé
$_SESSION['$listPlaceStag'] = $studentList;

// Encodage du fichier en .json et sauvegarde du fichier
jsonEncode($studentList);

// Page web sur laquelle la session va s'éxecuter
header("Location: ../view/affichage.php");