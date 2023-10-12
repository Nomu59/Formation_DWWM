import Personne from "./Personne.js";

export default class Etudiant extends Personne {
    constructor(prenom, nom, specialite, notes) {
        super(prenom, nom);
        this.specialite = specialite;
        this.notes = notes;
    }

    moyenne(notes) {
        let resultat = 0;
        let length = 0;
        for (const key in notes) {
            length++;
            resultat += notes[key];
        }
        return resultat / length;
    }

    display() {
        return `Etudiant - ${super.display()} - spécialité : ${this.specialite} - moyenne : ${this.moyenne(this.notes)}`;
    }
}