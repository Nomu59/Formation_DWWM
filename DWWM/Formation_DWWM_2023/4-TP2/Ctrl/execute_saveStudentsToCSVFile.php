<?php
include "Modele/functions.php";

// Chargement de la liste des students et stockage dans la variable studentList
$studentList = loadStudentsFromFile('ListeStagiaire.txt');

// Mélange des valeurs de studentList
$studentList = shufflePositions($studentList);

saveStudentsToCSVFile($studentList);
?>