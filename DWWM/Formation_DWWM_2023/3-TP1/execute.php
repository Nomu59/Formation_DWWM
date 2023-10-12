<?php
include "functions.php";

// Execution des fonctions
// Chargement de la liste des students et stockage dans la variable studenList
$studentList = loadStudentsFromFile('ListeStagiaire.txt');

// Sauvegarde de la liste des students
studentsToFile($studentList);

// Sauvegarde de la liste des students au format CSV
saveStudentsToCSVFile($studentList);
?>