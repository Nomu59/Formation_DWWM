// document.getElementById("titre1") permet de récupérer un élément à l'id qui a pour valeur titre1

const titre1 = document.getElementById("titre1");
console.log(titre1);


// Exercice 1 récupérer titre2 : le h2 qui est présent dans le HTML

const titre2 = document.getElementById("titre2");
console.log(titre2);


// Exercice 2 récupérer la class "myClass"

const myClasses = document.getElementsByClassName("myClass");
console.log(myClasses);


// Exercice 3 récupérer le name "colors"

const colors = document.getElementsByName("colors");
console.log(colors);


// Exercice 4 récupérer le nom de balise "hr"

const hr = document.getElementsByTagName("hr");
console.log(hr);


// querySelector(".myClass") permet de sélectionner le premier élément au sélecteur CSS ".myClass"

const myClassQuery = document.querySelector(".myClass");
console.log(myClassQuery);


// Exercice 5 récupérer le premier input de type radio

const radioQuery = document.querySelector("input");
console.log(radioQuery);
// solution plus spécifique aux inputs de type radio
const radioQuerybis = document.querySelector("input[type=radio]");
console.log(radioQuerybis);


// querySelectorAll(".myClass") permet cette fois-ci d'obtenir tous les éléments avec la classe "myClass"

const myClassQueryAll = document.querySelectorAll(".myClass");
console.log(myClassQueryAll);


// Exercice 6 faire la même chose pour les inputs de type radio

const radioQueryAll = document.querySelectorAll("input[type=radio]");
console.log(radioQueryAll);
// solution pour ne sélectionner que le second input de type radio
const deuxièmeRadio = radioQueryAll[1];
console.log(deuxièmeRadio);


// innerHTML permet d'intégrer des balises avec du texte dans un élément du DOM

myClasses[1].innerHTML = "<h1>Votre compte à été piraté</h1><form> <label>Donnez votre code de carte bleue pour le déverouiller : <input></label></form>"


// Contrairement à innerHTML, textContent modifie uniquement du texte, si on ajoute des balises ce sera interprété comme du texte.

myClassQuery.textContent = "le JS c'est la mort"


// Exercice 7: Modifier le titre 1 de votre page

titre1.textContent = "Trololololo lololo lololo"


// Insérer des variables dans nos textes

const inputText = document.querySelector("input[type=text]");
// console.log(inputText.value);
const prenom = "Nomu";
const message = document.getElementById("message");
message.textContent = `Bienvenue ${prenom}`;


// Èxercice 8: dans le titre h1, remplacer le texte par `bienvenue sur le site de ${prenom}

titre1.textContent = `Bienvenue sur le site de ${prenom}`;


// J'utilise un tableau pour afficher les élèves dans une liste non ordonnée avec innerHTML

const liste = document.querySelector("ul");
const eleves = ["Julien", "Jérémy", "Sophie"];
// liste.innerHTML += `<li> ${eleves[0]} </li>`
// liste.innerHTML += `<li> ${eleves[1]} </li>`
// liste.innerHTML += `<li> ${eleves[2]} </li>`
for (const eleve of eleves) {
    liste.innerHTML += `<li> ${eleve} </li>`
};

myClasses[1].classList.remove("myClass");
const div = document.getElementsByTagName("div")[0];
div.classList.add("cache");


// toggle() ajoute la class si elle n'est présente, la supprime si elle est présente

// div.classList.toggle("cache");


// il est possible d'utiliser style pour appliquer du CSS via le JavaScript
myClasses[0].style.textAlign = "center";


// Exercice 9 centrer le titre h1 et la liste des élèves

titre1.style.textAlign = "center";
liste.style.textAlign = "center";
liste.style.listStyleType = "none";

radioQuery.setAttribute("type", "color");


// exercice 10 modifier le type du 2ème bouton radio en type = "button" puis changer l'attribut du placeholder de l'input text : ajouter "Jane Doe"

radioQueryAll[1].setAttribute("type", "button");
radioQueryAll[1].setAttribute("value", "accepter");
inputText.setAttribute("placeholder", "Jane Doe");


// Création d'un élément <li> avec comme contenu "Jane"

const li = document.createElement("li");
li.textContent = "Jane";


// appendChild() permet d'ajouter ce li à la liste
// li est "l'enfant" de liste

liste.appendChild(li);


// removeChild() permet de supprimer un "enfant"

const Jeremy = document.getElementsByTagName("li")[1];
liste.removeChild(Jeremy);

const Sophie = document.getElementsByTagName("li")[1];


// replaceChild() permet de remplacer un "enfant" par un autre

const li2 = document.createElement("li");
li2.textContent = "Hugues";
liste.replaceChild(li2, Sophie);

radioQueryAll[1].addEventListener("click", (e) =>{
    e.preventDefault();
    document.body.classList.add("fishMode");
});