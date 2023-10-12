
let smoothie = ["Pomme", "Poire"];

// 1 - ajouter une Banane avec un push
smoothie.push("Banane"); 
// ["Pomme", "Poire", "Banane"]
// 2 - ajouter du Raisin et la Mangue sur le même push
smoothie.push("Raisin", "Mangue");
// ["Pomme", "Poire", "Banane", "Raisin", "Mangue"]
// 3 - supprimer la Mangue avec pop
smoothie.pop();
// ["Pomme", "Poire", "Banane", "Raisin"]
// 4 - Ajouter du Sucre
smoothie.push("Sucre");
// ["Pomme", "Poire", "Banane", "Raisin", "Sucre"]
// 5 - Remplacer le Raisin par l'Ananas
smoothie.splice(3, 1, "Ananas");
console.log(smoothie);


/*****************************************************************
 *                  Super Heroes Maker
 *****************************************************************/

//1- Créer une class SuperHero, avec comme paramètre à ajouter dans le constructor :
//              - nom (de super héro)
//              - pouvoir
//              - genre (Masculin/Féminin/Non genré)
//              - accessoire (ex : Marteau, épée, bouclier....)
class SuperHero {
    constructor(nom, pouvoir, genre, accessoire) {
        this.nom = nom;
        this.pouvoir = pouvoir;
        this.genre = genre;
        this.accessoire = accessoire;
    }
}


//2- Créer 3 à 5 super héros avec la classe précédement créé
let MichL = new SuperHero("MichL", "Tuer tout le monde avec ses talents de chant", "Inconnu", "Webcam d'occasion");
let Nomu = new SuperHero("Nomu", "Crée des blagues nulles sans limite", "Masculin", "Lunettes de génie");
let CouA = new SuperHero("CouA", "Rendre fou tout le monde", "Inconnu", "Gamin atteint d'une maladie mentale grave");


//3- créer un groupe les réunissant (sous forme de tableau)
const superHeros = [MichL, Nomu, CouA];


//4- Avant de voir la manipulation du DOM, on peut afficher nos superHéros avec le code suivant :
for (let i in superHeros) {
    document.writeln("<br> <div>",superHeros[i].nom," ", superHeros[i].pouvoir," ",superHeros[i].genre," ", superHeros[i].accessoire,"</div>");
}
// avec le code ci dessus créer une boucle permettant d'afficher tous les super héros