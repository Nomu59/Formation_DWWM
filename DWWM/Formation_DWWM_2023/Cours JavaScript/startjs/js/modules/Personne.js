// export default est nécessaire si je veux utiliser ma classe dans un autre fichier
export default class Personne {
    constructor(prenom, nom) {
        this.prenom = prenom;
        this.nom = nom;
    }

    display() {
        return(`${this.prenom} ${this.nom}`);
    }
}