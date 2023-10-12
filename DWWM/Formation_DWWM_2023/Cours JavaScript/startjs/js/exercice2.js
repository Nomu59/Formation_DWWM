/*************************************************************************************
 *                           Character manager
 *************************************************************************************/

const characters = [
    {
        nom : "Anakin Skywalker alias Darth Vader ",
        affiliation : "Sith",
        grade : "Seigneur",
        infos :{
            origine : "Tatooine",
            naissance : -41,
            deces : 4
        }
    },
    {
        nom : "Luke Skywalker",
        affiliation : "Jedi",
        grade : "Maitre",
        infos :{
            origine : "Polis Massa",
            naissance : -19,
            deces : 34
        }
    },
    {
        nom : "Sheev Palpatine alias Darth Sidious",
        affiliation : "Sith",
        grade : "Seigneur",
        infos :{
            origine : "Naboo",
            naissance : -84,
            deces : 35
        }
    },
    {
        nom : "Jar Jar Binks",
        affiliation : "République galactiques",
        grade : "Sénateur",
        infos :{
            origine : "Naboo",
            naissance : -52
        }
    }
]

// 1/ affichez tous les nom des personnages
// 2/ affichez Palpatine
// 3/ affichez les infos de Luke
// 4/ trouvez uniquement les Sith
// 5/ les dates de naissances et de mort sont des nombres, les nombres négatifs sont des dates sont avant la bataille de Yavin, Calculez l'age à leur mort, Attention un personnage n'a pas de date de décés: envoyez "encore en vie"

const noms = characters.map(function(character) {
    return character.nom;
});
console.log(noms);

const palpatine = characters.find(function(character) {
    return character.nom.includes("Palpatine");
});
console.log(palpatine);

const infosLuke = characters.find(function(character) {
    return character.nom.includes("Luke");
}).infos;
console.log(infosLuke);

const sith = characters.filter(function(character) {
    return character.affiliation.includes("Sith");
});
console.log(sith);

const ageCharacters = characters.map(function(character) {
    if (character.infos.deces) {
        return character.infos.deces - character.infos.naissance;
    } else {
        return "Encore en vie";
    }
});
console.log(ageCharacters);

// Méthode plus courte
console.log(characters.map(character => character.infos.deces ? character.infos.deces- character.infos.naissance : "encore en vie"));