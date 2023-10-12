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
        // importation du fichier Compte.php qui contient la classe Compte

        // include("classes/Compte.php");


        // importation de la classe Personne

        // include("classes/Personne.php");


        // importation de la classe Voiture

        // include("classes/Voiture.php");


        // importation de la classe Animal

        // include("classes/Animal.php");


        // importation de la classe Produit

        // include("classes/Produit.php");


        // importation de la classe Utilisateur

        // include("classes/Utilisateur.php");


        // importation de la classe Chien

        // include("classes/Chien.php");


        // importation de la classe Serpent

        // include("classes/Serpent.php");


        // importation de la classe Personne2

        // include("classes/Personne2.php");


        // importation de la classe Etudiant

        // include("classes/Etudiant.php");


        // importation de la classe Employe

        // include("classes/Employe.php");


        // importation de la classe Professeur

        // include("classes/Professeur.php");


        // importation de la classe Forme

        // include("classes/Forme.php");


        // importation de la classe Carre

        // include("classes/Carre.php");


        // importation de la classe Rectangle

        // include("classes/Rectangle.php");


        // importation de la classe Rond

        // include("classes/Rond.php");


        // importation de la classe Triangle

        // include("classes/Triangle.php");


        spl_autoload_register(function($class_name){
            include "classes/".$class_name.".php";
        });


        // Instancier la classe Compte = Créer un objet de type Compte

        // $compteAlex = new Compte("Alex", 30000);
        // $compteAlex -> crediter(50);
        // echo $compteAlex -> solde;


        // appel du getter

        // echo $compteAlex -> getSolde();
        // echo "<br>";


        // appel du setter

        // $compteAlex -> setSolde(1000000);
        // echo $compteAlex -> getSolde();
        // echo "<br>";
        // echo $compteAlex -> getTitulaire();
        // echo "<br>";
        // $compteAlex -> setTitulaire("18-25");
        // echo $compteAlex -> getTitulaire();
        // echo "<br>";

        $alex = new Personne("Boucher", "Alex", 20);
        $alex -> sePresenter();
        echo "<br>";
        $alex -> setNom("Frite");
        echo $alex -> getNom();
        echo "<br>";
        $alex -> setPrenom("Balsamique");
        echo $alex -> getPrenom();
        echo "<br>";
        $alex -> setAge(18);
        echo $alex -> getAge();

        $ferrari = new Voiture("Ferrari", "F40", "rouge", 3700000, "essence");
        echo "<br>";
        $ferrari -> decrire();
        echo "<br>";
        $ferrari -> demarrer();
        echo "<br>";
        $ferrari -> baisserPrix();
        echo "<br>";
        echo $ferrari -> marque;


        $chien = new Animal (4, "chien", 1000, 1, "aboie", "croquettes");
        $vache = new Animal (4, "vache", 2000, 1.50, "meugle", "herbe");
        $moineau = new Animal (2, "moineau", 3000, 0.50, "roucoule", "fromage");
        $Animals=array($chien,$vache,$moineau);
        echo "<br>";
        echo "<br>";
        foreach($Animals as $animal){
            $animal->crier();
            $animal->manger();
            $animal->boire();
            $animal->decrire();
            $animal->seDeplacer();
        }
    ?>

    <form action="animal.php" method="get">
        <label for="nbPattes">
            <p>Nombre de pattes :</p>
            <input type="number" name="nbPattes" id="nbPattes">
        </label>
        <label for="espece">
            <p>Espece :</p>
            <input type="text" name="espece">
        </label>
        <label for="poids">
            <p>Poids de l'animal :</p>
            <input type="number" name="poids">
        </label>
        <label for="taille">
            <p>Taille de l'animal :</p>
            <input type="number" name="taille">
        </label>
        <label for="crie">
            <p>Cri de l'animal :</p>
            <input type="text" name="crie">
        </label>
        <label for="nourriture">
            <p>Nourriture de l'animal :</p>
            <input type="text" name="nourriture">
        </label><br>
        <label for="boire">
            <p>L'animal boit ?</p>
            <input type="radio" name="boire">Oui
            <input type="radio" name="boire">Oui
        </label><br><br>
        <input type="submit" value="Envoyer">
    </form><br><br>

    <?php
        $totk = new Produit("The Legend Of Zelda : Tears Of The Kingdom", "jeux-vidéo", 60, 100, 5);
        $totk -> ajouterProduit();
        $totk -> acheterProduit(5);
        $totk -> verifierStock();
        $totk -> decrireProduit();
        $totk -> afficherPrixTotalProduit();
        echo "<br>";

        $television = new Produit("television", "électronique", 400, 200, 5);
        $television -> ajouterProduit();
        $television -> acheterProduit(1);
        $television -> verifierStock();
        $television -> decrireProduit();
        $television -> afficherPrixTotalProduit();
        echo "<br>";

        $user = new Utilisateur("Ducon", "Gens", 69);

        echo $user -> getNom();
        echo "<br><br>";

        $user -> sePresenter();
        echo "<br><br>";

        function estConnecte($user){
            if($user -> getConnexion()){
                echo "connecté";
            }else{
                echo "déconnecté";
            }
        }

        estConnecte($user);
        $user -> seConnecter();
        echo "<br><br>";
        estConnecte($user);
        echo "<br><br><br>";

        $chihuahua = new Chien("balle", "Wifi", "chihuahua");

        $chihuahua -> jouer();
        $chihuahua -> appelerChien();
        $chihuahua -> decrireRace();
        echo "<br>";

        $queueEclaboussante = new Serpent("python");

        $queueEclaboussante -> seDeplacer();
        $queueEclaboussante -> manger();
        echo "<br>";


        $douk = new Employe(01, "DOUK", "Rachid", "10000.0");
        $ngoye = new Employe(02, "NGOYE", "Roland", "10000.0");

        $obaka = new Etudiant(03, "OBAKA", "Med", 65678754);
        $alseny = new Etudiant(04, "ALSENY", "Thomas", 87543543);

        $oba = new Professeur(05, "OBA", "Kevin", "5700.0", "JAVA/JEE");
        $magassouba = new Professeur(06, "MAGASSOUBA", "Cheick", "5000.0", "PHP");

        echo "La liste des employes : <br>";
        $douk -> toString();
        $ngoye -> toString();
        echo "La liste des étudiants : <br>";
        $obaka -> toString();
        $alseny -> toString();
        echo "La liste des professeurs : <br>";
        $oba -> toString();
        $magassouba -> toString();
        echo "<br><br>";

        $bob = new Carre;
        $bob -> calculerAire(10, 0);
        $bob -> calculerPerimetre(10, 0);

        $boooooooooob = new Rectangle;
        $boooooooooob -> calculerAire(10, 100);
        $boooooooooob -> calculerPerimetre(10, 100);

        $bOb = new Rond;
        $bOb -> calculerAire(10, 0);
        $bOb -> calculerPerimetre(10, 0);

        $bAb = new Triangle;
        $bAb -> calculerAire(10, 100);
        $bAb -> calculerPerimetre(10, 100);
        echo "<br>";
    ?>
</body>
</html>