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
        // déclaration de la variable $prenom avec votre prénom en valeur

        $prenom = "Alex";
        

        // déclarer une variable nom et age

        $nom = "Boucher";
        $age = 20;


        // écrire Bienvenue $prenom $nom, vous avez $age ans

        echo "Bienvenue $prenom $nom, vous avez $age ans";


        // Créer un tableau en php :

        $eleves = array("Alex", "Leila", "Quentin", "Fabien");


        // afficher le premier élève (<br> est utilisé pour un retour à la ligne)

        echo "<br> $eleves[0]";


        // affichez les autres élèves 

        echo "<br> $eleves[1] <br> $eleves[2] <br> $eleves[3]";


        // Créer un tableau d'ensemble de couples(clé, valeur)

        $daltons = array(4=>"Joe", 5=>"William", 6=>"Jack", 7=>"Averell");
        echo "<br>".$daltons[4].", ".$daltons[5].", ".$daltons[6].", ".$daltons[7];

        $daltons2 = array("ainé"=>"Joe", "cadet1"=>"William", "cadet2"=>"Jack", "benjamin"=>"Averell");
        echo "<br>".$daltons2["ainé"].", ".$daltons2["cadet1"].", ".$daltons2["cadet2"].", ".$daltons2["benjamin"];

        $film = array("titre"=>"Avengers", "duree"=>"2h10","genre"=>"Super-héros");


        // affichez les informations du film

        echo "<br>".$film["titre"].", ".$film["duree"].", ".$film["genre"];


        // Ecrire une variable $personneConnectee = 0 puis ajoutez 10 personnes
        // divisez le résultat par 5 puis multipliez par 75, affichez le résultat par la suite
        // faites vos calculs avec le moins d'appels de variable possible

        $personneConnectee = 0;
        $personneConnectee += 10;
        $personneConnectee /= 5;
        $personneConnectee *= 75;
        echo "<br> $personneConnectee <br>";


        // Creer une fonction

        function plusUn($nombre){
            return ++$nombre;
        }
        echo plusUn(10);


        // Créez une fonction moinsUn

        function moinsUn($nombre){
            return --$nombre;
        }
        echo "<br>";
        echo moinsUn(10);


        // Créez 2 fonctions : foisDeux et divDeux

        function foisDeux($nombre){
            return 2 * $nombre;
        }
        echo "<br>";
        echo foisDeux(10);

        function divDeux($nombre){
            return $nombre / 2;
        }
        echo "<br>";
        echo divDeux(10);

        echo "<br>";


        // Conditions

        $agePersonne = 21;
        $ageMajorite = 18;
        $ageAdo = 12;

        if($agePersonne < $ageAdo){
            echo "vous êtes mineur";
            echo " Bienvenue dans le jardin d'enfant";
        } elseif($agePersonne < $ageMajorite){
            echo "vous êtes ado";
            echo " Bienvenue dans le site de jeux vidéo";
        }
        else{
            echo "vous êtes majeur";
            echo " Bienvenue dans le site pour adultes";
        }


        // switch

        $feu = "rouge";
        echo "<br>";
        switch($feu){
            case "vert":
                echo "J'avance";
            break;
            case "orange":
                echo "Je ralentis";
            break;
            case "rouge":
                echo "Je m'arrête";
            break;
            default:
                echo "Le feu est en panne";
        }

        echo "<br>";


        // boucles
        // boucle for
        // Attention pour la longueur du tableau $eleves on utilise count($eleves)

        for ($i=0; $i < count($eleves); $i++){
            echo $eleves[$i]."<br>";
        }


        // Il existe un équivalent de for...of en js, en php c'est le foreach

        foreach ($eleves as $eleve) {
            echo $eleve."<br>";
        }
        

        // boucle while

        $visiteur = 0;
        while ($visiteur <= 5) {
            echo "un visiteur est entré dans la salle <br>";
            $visiteur++;
        }


        // boucle do while

        do{
            echo $visiteur;
            $visiteur++;
        } while ($visiteur <= 10);
    ?>
</body>
</html>