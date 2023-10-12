import Etudiant from "./modules/Etudiant.js";
import Professeur from "./modules/Professeur.js";

let etudiant1 = new Etudiant("Cordier", "Emilie", "Littérature",
{
    français : 12,
    anglais : 15,
    math : 8,
    espagnol : 11,
    SVT : 16
});

let etudiant2 = new Etudiant("Lefrèvre", "Jean", "Sciences",
{
    français : 11,
    anglais : 8,
    math : 18,
    espagnol : 19,
    SVT : 20
});

console.log(etudiant1.display());
console.log(etudiant2.display());

let prof1 = new Professeur("Landier", "Hubert", ["Math", "SVT"]);
let prof2 = new Professeur("Lardon", "Martine", ["Français", "Anglais"]);

console.log(prof1.display());
console.log(prof2.display());

let etudiants = [etudiant1, etudiant2];

const moyenneMatiere = (etudiants, matiere) => {
    let length = 0;
    let moyenne = 0;
    etudiants.map(etudiant => {
        length++;
        moyenne += etudiant.notes[matiere];
    })
    return moyenne / length;
}

const matieres = ["français", "anglais", "math", "espagnol", "SVT"];

matieres.map(matiere => {
    console.log(`Matière : ${matiere} moyenne générale : ${moyenneMatiere(etudiants, matiere)}`);
})

const mention = (etudiant) => {
    const moyenneEtudiant = etudiant.moyenne(etudiant.notes);
    if (moyenneEtudiant < 12) {
        return etudiant.display() + " pas de mention";
    } else if (moyenneEtudiant < 14) {
        return etudiant.display() + " mention : assez bien";
    } else if (moyenneEtudiant < 16) {
        return etudiant.display() + " mention : bien";
    } else {
        return etudiant.display() + " mention : très bien";
    }
}

console.log(mention(etudiant1));
console.log(mention(etudiant2));

const getNote = () => {
    return Number((Math.random()*20).toFixed(2));
}

let etudiant3 = new Etudiant("Lagarde", "Kévin", "Général",
{
    français : getNote(),
    anglais : getNote(),
    math : getNote(),
    espagnol : getNote(),
    SVT : getNote()
});

console.log(mention(etudiant3));