<?php

//en input un tablo simple avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegardes
function studentsToFile(array $studentList) : void{
    file_put_contents('sauvegardes/save_students_'.date('d-m-y__H-i-s').'.txt', $studentList);
}

//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (string $pathFile) : array{
    // Lecture du fichier
    $pathFile = file_get_contents($pathFile);

    // Explosion du fichier pour le transformer en array
    $studentList = explode("\n", $pathFile);

    // Retourner le résultat
    return($studentList);
}

//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    // Remplacement des espacements par ";"
    $studentList = str_replace(' ', ';', $studentList);

    // Sauvegarde au format CSV
    file_put_contents('sauvegardes/save_students_bis_'.date('d-m-y__H-i-s').'.csv', $studentList);
}
?>