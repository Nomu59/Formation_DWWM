// alert("coucou");
let a = 20;
console.log("valeur de a :"+ a);
let b = a;
console.log("valeur de b :"+ b);
a = 50;
console.log("valeur de a :"+ a);
console.log("valeur de b :"+ b);

let produit = {
    name : "chaise",
    prix : 10.99
}
let produit2 = {
    name : "table",
    prix : 25.99
}


let magasin = [produit,produit2];

produit.prix = 8.59

console.log(magasin);

produit2.name = "table avec ralonge"

console.log(magasin);

magasin[1].prix = 20.50;

console.log(produit2);

const stagiaires = ["Hasina","Kenza"];
// .length permet d'avoir la taille du tableau
console.log(stagiaires.length);
// .push() permet d'ajouter à la fin du tableau
stagiaires.push("Jacques");
console.log(stagiaires);
console.log(stagiaires.length);
// .unshift() permet d'ajouter au début du tableau
stagiaires.unshift("Dylan");
console.log(stagiaires);
console.log(stagiaires.length);
// .pop() permet de supprimer un élement à la fin du tableau
stagiaires.pop();
console.log(stagiaires);
console.log(stagiaires.length);
// .shift() permet de supprimer un élement au début du tableau
stagiaires.shift()
console.log(stagiaires);
console.log(stagiaires.length);