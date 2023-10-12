<?php

// Écrivez un bloc `if` qui affiche si la variable suivante est :
//     - plus grande que 10
//     - plus petite que 10
//     - égale à 10

$nombre = 10;

if ($nombre > 10) {
    echo 'La variable $nombre est plus grande que 10';
} elseif ($nombre < 10) {
    echo 'La variable $nombre est plus petite que 10';
} else {
    echo 'La variable $nombre est égale à 10';
}