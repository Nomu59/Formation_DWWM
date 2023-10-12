<?php
function fusion($valeur1, $valeur2)
{
    return $valeur1 . $valeur2;
}
function addition($valeur1, $valeur2)
{
    return $valeur1 + $valeur2;
}
function soustraction($valeur1, $valeur2)
{
    return $valeur1 - $valeur2;
}
function multiplication($valeur1, $valeur2)
{
    return $valeur1 * $valeur2;
}
function division($valeur1, $valeur2)
{
    return $valeur1 / $valeur2;
}
function menu($option, $valeur1, $valeur2)
{
    if ($option == "combiner")
        return $valeur1 . $valeur2;
    elseif ($option == "additionner")
        return $valeur1 + $valeur2;
    elseif ($option == "soustraire")
        return $valeur1 - $valeur2;
    elseif ($option == "multiplier")
        return $valeur1 * $valeur2;
    elseif ($option == "diviser")
        return $valeur1 / $valeur2;
    else
        return "Erreur";
}
$nombres = array(43, 3, 42, 69, 999);

function taille($i)
{
    return count($i);
}
function somme($nombres)
{
    $resultat = 0;
    for ($i = 0; $i < count($nombres); $i++) {
        $resultat += $nombres[$i];
    }
    return $resultat;
}
function moyenne($nombres)
{
    $somme = 0;
    $resultat = 0;
    for ($i = 0; $i < count($nombres); $i++) {
        $somme += $nombres[$i];
    }
    $resultat = $somme / $i;
    return $resultat;
}
function ecart($nombres)
{
    $ecart = max($nombres) - min($nombres);
    return $ecart;
}
?>