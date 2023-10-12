<?php
    // Demander des valeurs
    $ht = readline("Quel est le prix de l'article HT? ");
    $nbArticle = readline("Combien y a t il d'article? ");
    $tva = $ht / 100 * 10;
    $ttc = $nbArticle * $ht * (1 + $tva);

    // Affichage
    echo "L'article vaut $ht euros, il y a $nbArticle articles et la TVA est de $tva euro. Le prix total TTC est de $ttc euros.";
?>