
let smoothie = ["Pomme", "Poire"];

// 1 - ajouter une Banane avec un push
smoothie.push("Banane");
// 2 - ajouter du Raisin et la Mangue sur le même push
smoothie.push("Raisin", "Mangue");
// 3 - supprimer la Mangue avec pop
smoothie.pop();
// 4 - Ajouter du Sucre
smoothie.push("Sucre")
// 5 - Remplacer le Raisin par l'Ananas
console.log(smoothie.indexOf("Raisin"));
smoothie[3] = "Ananas";
// smoothie[smoothie.indexOf("Raisin")] = "Ananas";
console.log(smoothie);

/*****************************************************************
 *                  Super Heroes Maker
 *****************************************************************/

//1- Créer une class SuperHero, avec comme paramètre à ajouter dans le constructor :
//              - nom (de super héro)
//              - pouvoir
//              - genre (Masculin/Féminin/Non genré)
//              - accessoire (ex : Marteau, épée, boublier....)
class SuperHero {
    constructor(nom, pouvoir, genre, accessoire) {
        this.nom = nom;
        this.pouvoir = pouvoir;
        this.genre = genre;
        this.accessoire = accessoire;
    }
}

//2- Créer 3 à 5 super héros avec la classe précédement créé
let thor = new SuperHero("Thor", "Tonnerre", "masculin", "Marteau");
let ironMan = new SuperHero("Iron Man", "Riche", "masculin", "Armure");
let wonderWoman = new SuperHero("Wonder Woman", "Force surhumaine", "féminin", "Lasso");

//3- créer un groupe les réunissant (sous forme de tableau)
const superHeros = [thor, ironMan, wonderWoman];

//4- Avant de voir la manipulation du DOM, on peut afficher nos superHéros avec le code suivant :
// document.writeln("<br> <div>",superHeros[0].nom," ", superHeros[0].pouvoir," ",superHeros[0].genre," ", superHeros[0].accessoire,"</div>");
// avec le code ci dessus créer une boucle permettant d'afficher tous les super héros

// function afficherSuperHero() {
//     for (const i in superHeros) {
//         let couleur;
//         if (superHeros[i].genre == "masculin") {
//             couleur = "bleu";
//         }else{
//             couleur = "jaune";
//         }
//         document.writeln(`<br> <div class=${couleur}>`, superHeros[i].nom, " ", superHeros[i].pouvoir, " ", superHeros[i].genre, " ", superHeros[i].accessoire, "</div>");
//     }
// }

// function creerSuperHero(){
//     let nom = prompt("Quel est le nom du superHero ?");
//     let pouvoir = prompt("Quel est son pouvoir ?");
//     let genre = prompt("masculin, féminin ou non binaire ?");
//     let accessoire = prompt("Quel est son accessoire principal ?");
//     superHeros.push(new SuperHero(nom,pouvoir,genre,accessoire));
// }

// function demanderUtilisateur(){
//     let choix = prompt("voulez-vous créer un super héro ?");
//     while(choix=="oui"){
//         creerSuperHero();
//         choix = prompt("voulez-vous en créer un autre ?");
//     }
//     afficherSuperHero();
// }
// demanderUtilisateur();

function afficherSuperHero(superHeros) {
    for (const i in superHeros) {
        let couleur;
        if (superHeros[i].genre == "masculin") {
            couleur = "bleu";
        } else {
            couleur = "jaune";
        }
        // document.writeln(`<br> <div class=${couleur}>`, superHeros[i].nom, " ", superHeros[i].pouvoir, " ", superHeros[i].genre, " ", superHeros[i].accessoire, "</div>");
        const div = document.createElement("div");
        div.classList.add(couleur);
        div.innerHTML =  `  nom : ${superHeros[i].nom} <br>
                            pouvoir : ${superHeros[i].pouvoir} <br>
                            genre : ${superHeros[i].genre} <br>
                            accessoire : ${superHeros[i].accessoire} <br>
        `
        document.body.appendChild(div);
    }
}
afficherSuperHero(superHeros);

function filtrerSuperHero(superHeros, motCle){
    return superHeros.filter(superHero => superHero.nom.toLowerCase().includes(motCle.toLowerCase()))
}

console.log(filtrerSuperHero(superHeros,"on"));