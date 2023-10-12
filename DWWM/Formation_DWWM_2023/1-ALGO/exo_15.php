<?php
// Demander 3 noms
$nom1 = readline("Ecris un nom ");
$nom2 = readline("Ecris un second nom ");
$nom3 = readline("Ecris un troisième nom ");

// Verification
$tab = array("$nom1", "$nom2", "$nom3");
sort($tab);
print_r($tab);
?>