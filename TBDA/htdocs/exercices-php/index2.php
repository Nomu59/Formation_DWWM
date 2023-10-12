<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Exercice 1 : Déclarez plusieurs variables :
    //          - une variable pour le prénom
    //          - une variable pour le nom
    //          - une variable pour l'age
    //          - une variable pour un tableau de 3 animaux (vos préférés)
    //          - une variable pour un tableau associatif d'un film de votre choix avec comme attributs : titre, genre, durée
    // chaque variable doit être visible sur votre page

    $prenom = "Alex";
    echo $prenom;

    $nom = "Boucher";
    echo "<br> $nom";

    $age = 20;
    echo "<br> $age ans";

    $animauxPreferes = array("Moi", "Pikachu", "SCP999");
    echo "<br> $animauxPreferes[0], $animauxPreferes[1], $animauxPreferes[2]";

    $film = array("titre"=>"Super Mario Bros", "genre"=>"Animation", "durée"=>90);
    echo "<br>".$film["titre"].", ".$film["genre"].", ".$film["durée"]." minutes";


    // Exercice 2 : Ecrire une phrase : Bienvenue sur le site de $prenom $nom
    // Créer une variable $visiteur avec la valeur 0 puis écrire : vous avez $visiteur visiteur(s)

    echo "<br> Bienvenue sur le site de $prenom $nom";
    $visiteur = 0;
    echo "<br> Vous avez $visiteur visiteur(s)";


    // Exercice 3 : Ecrire :
    //      - une fonction qui fusionne un chaine de caractère à une autre
    //      - une fonction qui additionne 2 nombres
    //      - une fonction qui soustrait 2 nombres
    //      - une fonction qui multiplie 2 nombres
    //      - une fonction qui divise 2 nombres

    function fusion($valeur1, $valeur2){
        return $valeur1 . $valeur2;
    }
    echo "<br>";
    echo fusion("Spaghetti", "Bolognaise");

    function addition($valeur1, $valeur2){
        return $valeur1 + $valeur2;
    }
    echo "<br>";
    echo addition(49, 3);

    function soustraction($valeur1, $valeur2){
        return $valeur1 - $valeur2;
    }
    echo "<br>";
    echo soustraction(49, 3);

    function multiplication($valeur1, $valeur2){
        return $valeur1 * $valeur2;
    }
    echo "<br>";
    echo multiplication(49, 3);

    function division($valeur1, $valeur2){
        return $valeur1 / $valeur2;
    }
    echo "<br>";
    echo division(49, 3);


    // Exercice 4 : Ecrire une fonction menu qui demande si on veut combiner 2 chaines de caractères, aditionner, soustraire, multiplier ou diviser 2 nombres,cette fonction nécessite 3 paramètres : option, valeur1 et valeur2 

    function menu($option, $valeur1, $valeur2){
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

        else return "Erreur";
    }
    echo "<br>";
    echo menu("multiplier", 49, 3);


    // Exercice 5 Ecrire:
    // une fonction qui affiche la taille d'un array
    // une fonction qui calcule la somme des nombres d'un array
    // une fonction qui calcule la moyenne des nombres d'un array
    // une fonction qui calcule l'écart entre le plus petit et le plus grand nombre d'un array [Hard]

    $nombres = array(43, 3, 42, 69, 999);

    function taille($i){
        return count($i);
    }
    echo "<br>";
    echo taille($nombres);


    function somme($nombres){
        $resultat = 0;
        for ($i=0; $i < count($nombres); $i++){
            $resultat += $nombres[$i];
        } return $resultat;
    }
    echo "<br>";
    echo somme($nombres);


    function moyenne($nombres){
        $somme = 0;
        $resultat = 0;
        for ($i=0; $i < count($nombres); $i++){
            $somme += $nombres[$i];
        } $resultat = $somme / $i;
        return $resultat;
    }
    echo "<br>";
    echo moyenne($nombres);
    

    function ecart($nombres){
        $ecart = max($nombres) - min($nombres);
        return $ecart;
    }
    echo "<br>";
    echo ecart($nombres);
    ?>
</body>
</html>