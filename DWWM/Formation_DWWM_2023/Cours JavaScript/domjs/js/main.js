/* Le DOM

  Document Objet Model 
  Jl fournit une représentation du document sous forme d'un arbre et définit la façon dont la structure peut etre manipulée par votre programme (le JS dans notre cas)

  On peut dire qu'il s'aggit d'une sorte de "passerelle" entre le HTML et le JS

  Grace au dom nous allons être en mesure de venir accéder et/ou modifier notre HTML depuis le JS

  Chaque page chargée dans notre navigateur dispose d'un objet "document" utilisable en Js
  Cet objet "document" est notre point d'entrée vers notre contenu HTML

  Comment récupéré les différentes informations de notre HTML ?
*/

// getElementById()
/**
 * Cette méthode permet de récupérer un élément HTML à partir de son id
 * Elle prend en paramètre l'id de l'élément qu'on souhaite récupérer
 */
const welcome = document.getElementById("welcome");
console.log(welcome);

// getElementsByClassName()
let data = document.getElementsByClassName("contenu");
console.log(data);
console.log(data[0]);
console.log(data[1]);

/**
 * Contrairement a getElementById() on récupère une HTMLCollection qui ressemble à un tableau numérique, attention même si je récupère qu'un seul élément, je le récupére sous forme de tableau
 */

// getElementsByTagName()
/**
 * Cette méthode va nous permettre de récupérer un ou plusieurs éléments HTML à partir de son nom de balise
 */
let p = document.getElementsByTagName("p");
console.log(p[0]);

// .querySelector
/**
 * .querySelector() va prendre en paramètre un sélecteur "CSS", attention il va prendre uniquement le premier élément même s'il y en a plusieurs
 */
let contenu = document.querySelector(".contenu");
console.log(contenu);

// Ajouter All pour avoir tout les éléments 
let contenus = document.querySelectorAll(".contenu");
console.log(contenus);

let googleLink = document.querySelector("a");

// ou même le lien
console.log(googleLink.href);

// L'id
console.log(googleLink.id);

// La classe
console.log(googleLink.className);

// Contenu de l'élément
console.log(googleLink.textContent);

/*
Comme une variable classique, on va pouvoir lui réaffecter une nouvelle valeur
*/
googleLink.textContent = "GOOGLE";

// innerHTML
// Permet d'insérer des balises HTML et du texte sous forme string
contenu.innerHTML = "<img src='ours.jpeg' alt='ours' width='100' />";

/**
 * Ajouter des éléments
 */

// 1/ Création d'un élément (méthode create sur l'objet document)
let p1 = document.createElement("p");

// 2/ Définir l'élément
p1.id = "newParagraphe";
p1.textContent = "mon paragraphe en JS :)";

// 3/ Ajouter à l'élément dans HTML
// 3.1/ via le body
// document.body.appendChild(p1);
// Il le met à la fin du document

// 3.2/ dans une autre balise
contenus[1].appendChild(p1);

p1.style.backgroundColor = "blue";

/*
Dans un soucis de respect de la séparation des concepts nous évitons au maximum de manipuler les styles de cette façon, en effet nous privilégions l'utilisation des classes pour ajouter ou supprimer des styles
*/

// propriété classList
p1.classList.add("color-red", "text-uppercase");
console.log(p1.classList);

p1.classList.remove("text-uppercase"); // Supprime la classe text-uppercase

/**
 * Les évènements
 * 
 * Les évènements vont nous permettre de déclencher une fonction (une série d'instructions) suite à une itération / action de l'utilisateur
 * 
 * Notre objectif : Être en mesure de capter / capturer ces évènements afin d'exécuter une fonction
 * 
 * Nous allons trouver plusieurs types d'évènements
 * 
 * - Les évènements à la souris
 *      *click --> au click sur un élément
 *      *mouseenter --> au survol d'un élément
 *      *mouseLeave --> lorsque l'on quitte le survol d'un élément
 * 
 * - Les évènements du clavier
 *      *keydown --> une touche du clavier est enfoncée
 *      *keyup --> une touche du clavier est relachée
 * 
 * - Les évènements sur la fenêtre
 *      *scroll --> défilement de la fenêtre
 *      *resize --> redimensionnement de la fenêtre
 * 
 * - Les évènements sur le formulaire
 *      *change --> au changement de valeur pour les éléments <input>, <select>, <textarea>
 *      *submit --> avant l'envoi du formulaire
 * 
 * - Les évènements sur le DOM
 *      DOMContentLoades --> lorsque le document HTML est complètement chargé
 * 
 *******************************************************************
 Les écouteurs d'évènements

 Nous allons avoir besoin d'"attacher" un évènement à un élément ou autrement dit déclarer un écouteur d'évènement qui se chargera de lancer une action lorsque l'évènement se produira ---> cette action sera une fonction (cette fonction sera à l'intérieur d'une autre fonction et nous appellerons cette fonction une fonction callback)

 La fonction que nous allons utiliser pour déclarer un écouteur d'évènement est addEventListener()

 exemple de structure  : element.addEventListener("type d'évènement", fonction de callback ou nom d'une fonction existante)

 Exemple : Au clic le paragraphe portant l'id welcome, afficher le texte en jaune
 */
welcome.addEventListener("click", () => {
  if (welcome.style.color == "gold") {
    welcome.style.color = "black";
  } else {
    welcome.style.color = "gold";
  }
})

function toUpperCase() {
  if (p1.classList.contains("text-uppercase")) {
    p1.classList.remove("text-uppercase");
  } else {
    p1.classList.add("text-uppercase");
  }
}

p1.addEventListener("click", toUpperCase);

// Créer un input puis faire un écouteur d'évènement de type submit
let input = document.createElement("input");
input.type = "text";
input.id = "monInput";
document.body.appendChild(input);
input.addEventListener("change", () => {
  alert(input.value);
})

/*Evènement DOMContentLoaded

Cet évènement est déclenché lorsque le DOM est complètement chargé, sans attendre les images et les feuilles de style
Une erreur courante vise à utiliser l'évènement load plûtot que DOMContentLoaded
Le problème est que load ne se déclenche que lorsque la page est entièrement chargé
*/
document.addEventListener("DOMContentLoaded", () => {
  console.log("Le DOM est bien chargé !");
})

/**
 * Evènement scroll
 */
window.addEventListener("scroll", () => {
  console.log(window.scrollY);
  if (window.scrollY > 100) {
    console.log("Tu as scrollé à plus de 100px");
  }
  console.log("bravo");
})

/**
 * La méthode preventDefault sur l'objet event
 * 
 * Elle va nous permettre d'indiquer que nous ne souhaitons pas que l'action par défaut soit prise en compte
 * 
 * La fonction de callback passée en paramètre d'addEventListener peut prendre un paramètre
 * Ce paramètre représente l'objet event
 * Il est généralement nommé e, evt ou event
 * 
 * La méthode preventDefault de cet objet récupéré en paramètre permet d'empêcher le navigateur de déclencher son comportement par défaut
 * 
 * Exemple : empêcher d'aller sur google au click sur le lien portant l'id googleLink
 */

googleLink.addEventListener("click", e => {
  // Annuler le comportement par défaut
  e.preventDefault();
  alert("VOUS NE PASSEREZ PAS !");
  console.log(e.target);
  console.log(e.target.classList);
})

// Evènement submit
const form = document.querySelector("form");
const inputs = document.getElementsByTagName("input");
const [inputNom, inputPrenom, submitBtn] = inputs;
const ul = document.querySelector("ul");

console.log(inputs);
console.log(form, inputNom, inputPrenom, submitBtn);

form.addEventListener("submit", e => {
  e.preventDefault();
  console.log(inputNom.value + " " + inputPrenom.value);
  const li = document.createElement("li");
  li.textContent = inputNom.value + " " + inputPrenom.value;
  ul.appendChild(li);
  inputNom.value = "";
  inputPrenom.value = "";
})