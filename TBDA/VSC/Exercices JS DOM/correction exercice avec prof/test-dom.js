
// document.getElementById("titre1") permet de récupérer 
// un élément à l'id qui a pour valeur titre1
const titre1 = document.getElementById("titre1");
console.log(titre1);

//Exercice 1 récupérer titre2 : le h2 qui est présent dans le HTML
const titre2 = document.getElementById("titre2");
console.log(titre2);

// Exercice 2 récupérer la class "myClass"
const myClasses = document.getElementsByClassName("myClass");
console.log(myClasses);

// Exercice 3 récupérer le name "colors"
const colors = document.getElementsByName("colors");
console.log(colors);

// Exercice 4 Récupérer le nom de balise "hr"
const hr = document.getElementsByTagName("hr");
console.log(hr);

// querySelector(".myClass") permet de sélectionner le premier élement au sélecteur CSS ".myClass"
const myClassQuery = document.querySelector(".myClass");
console.log(myClassQuery);

// Exercice 5 Récupérer le premier input de type radio
const input1 = document.querySelector("input");
console.log(input1);
// solution plus spéfique aux inputs de type radio
const input1bis = document.querySelector("input[type=radio]");
console.log(input1bis);

// querySelectorAll(".myClass") permet cette fois-ci d'obtenir tous les élements avec la class "myClass"
const myClassQueryAll = document.querySelectorAll(".myClass");
console.log(myClassQueryAll);

// Exercice 6 Faire la même chose pour les inputs de type radio
const inputAll = document.querySelectorAll("input[type=radio]");
console.log(inputAll);
const deuxiemeInput = inputAll[1];
console.log(deuxiemeInput);

// innerHTML permet d'intégrer des balides avec du texte dans un élement du DOM
myClasses[1].innerHTML = "<h1>Votre compte a été piraté</h1><form> <label>Donnez votre code de carte bleu pour le déverouiller : <input></label></form>"

// Contrairement à innerHTML, textContent modifie uniquement du texte, si on ajoute des balises se sera interprété comme du texte.
myClassQuery.textContent = "Le JS c'est la mort"

// Exercice 7: Modifier le titre 1 de votre page
titre1.textContent = "JS ou la façon de fatigué un élève"