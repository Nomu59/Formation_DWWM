<?php
//en input un tablo associatif avec la liste des students à sauvegarder dans un fichier.txt
//nom du fichier : save_students_date-heureminiteseconde.txt dans le repertoire sauvegarde
function studentsToFile(array $studentList) : void{
    file_put_contents('Modele/sauvegardes/save_students_'.date('d-m-y__H-i-s').'.txt', $studentList);
}


//charger la liste des students à partir un fichier (listStudents.txt)
function loadStudentsFromFile (String $pathFile) : array{
    // Lecture du fichier
    $pathFile = file_get_contents($pathFile);

    // Explosion du fichier pour le transformer en array
    $studentList = explode("\n", $pathFile);

    // Second array pour les places du futur tableau associatif
    $place = array();

    // Ajout des valeurs dans le tableau place
    for ($i=0; $i < 16; $i++) { 
        $place[$i] = 'Place_' . $i + 1;
    }

    // Combinaison des deux arrays
    $studentList = array_combine($place, $studentList);

    // Retourner le résultat
    return($studentList);
}


//sauvegarde de la liste des students au format CSV (le separateur entre le nom et prenom ";")
function saveStudentsToCSVFile(array $studentList) : void{
    // Remplacement des espacements par ";"
    $studentList = str_replace(' ', ';', $studentList);

    // Sauvegarde au format CSV
    file_put_contents('Modele/sauvegardes/save_students_bis_'.date('d-m-y__H-i-s').'.csv', $studentList);
}


/*en en entrée un tableau associatif de stagiaire [K,V], en sorti un tableau associatif
avec les values mélangé.
ex :
["Place_1" => "MOUACI Leila"]
["Place_2" => "DEWEIRELD Nicolas"] 
["Place_3" => "BOUCHER Alex"] 
["Place_4" => "M'HMEMDI Quentin"] 
["Place_5" => "ADJAL Karim"] 
["Place_6" => "BELAHCEN Aimane"] 
["Place_7" => "GIRARD Fabien"] 
["Place_8" => "LE PEUCH Loick"] 
["Place_9" => "BALLOY Julien"] 
["Place_10" => "DELOURME Amaury"] 
["Place_11" => "AZAAOUAJ Younes"] 
["Place_12" => "SAHLI Asaad"] 
["Place_13" => "SAYARATH Alissa"] 
["Place_14" => "LYAGOUBI Mohamed"] 
["Place_15" => "OLIVIER Quentin"]
["Place_16" => "GACEM Nassim"]
*/
function shufflePositions(array $studentList ) : array {
    // Array place pour stocker les keys qui seront perdues avec le shuffle
    $place = array();

    // Boucle foreach pour stocker les valeurs place qui seront perdues après le shuffle
    foreach ($studentList as $key => $value) {
        $place[$key] = $key;
    }

    // Mélange des valeurs de l'array studentList
    shuffle($studentList);

    // Fusion du tableau studentList avec le tableau place pour récupérer les places perdues via le shuffle
    $studentList = array_combine($place, $studentList);

    // Boucle foreach afin d'afficher dans les futures sauvegardes les noms ET les places correspondantes
    foreach ($studentList as $key => $value) {
        $studentList[$key] = $key . ' => ' . $value . "\n";
    }
    return($studentList);
}
?>