<?php
include "Modele/functions.php";

// Chargement de la liste des éléments et stockage dans la variable studentList
$studentList = loadJSONFile($_GET["select"]);