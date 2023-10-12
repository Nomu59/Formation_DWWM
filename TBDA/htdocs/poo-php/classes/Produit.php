<?php
    /* Exercice : Créer une classe Produit avec les attributs suivants :
        - nom
        - categorie
        - prix
        - stock
        - alerteStock (seuil d'alerte qui va afficher si le produit a une quantité insuffisante)

    Déclarer des méthodes :
        - ajouterProduit (ajouter au stock)
        - acheterProduit (enlever une quantité au stock avec un paramètre quantite)
        - vérifierStock (permet de savoir le stock disponible et si on est dans le seuil alerte)
        - decrireProduit (afficker tout les attributs sauf l'alerteStock)
        - afficherPrixTotalProduit (permet de savoir la valeur totale du stock disponible)
        */

        class Produit{
            private $nom;
            private $categorie;
            private $prix;
            private $stock;
            private $alerteStock;

            public function __construct($nom, $categorie, $prix, $stock, $alerteStock){
                $this -> nom = $nom;
                $this -> categorie = $categorie;
                $this -> prix = $prix;
                $this -> stock = $stock;
                $this -> alerteStock = $alerteStock;
            }

            public function ajouterProduit(){
                $this -> stock++;
                echo "1 produit a été ajouté au stock et il y a donc $this->stock produit(s) en stock. <br><br>";
            }

            public function acheterProduit($quantite){
                $this -> stock -= $quantite;
                echo "$quantite produit(s) a/ont été acheté(s) et il reste $this->stock produits en stock. <br><br>";
            }

            public function verifierStock(){
                if($this->stock >= $this->alerteStock){
                    echo "Il y a $this->stock produit(s) en stock, le stock est suffisant. <br><br>";
                }else{
                    echo "Il y a $this->stock produit(s) en stock, le stock est insuffisant. <br><br>";
                }
            }

            public function decrireProduit(){
                echo "Ce produit est un(e) $this->nom, il fait parti de la catégorie des $this->categorie, son prix est de $this->prix euros et il y a $this->stock $this->nom en stock. <br><br>";
            }

            public function afficherPrixTotalProduit(){
                $prixTotal = $this -> prix * $this -> stock;
                echo "La totalité du stock vaut $prixTotal euros. <br><br>";
            }
        }
?>