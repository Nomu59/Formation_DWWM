// Exercice 1 : récupérer les éléments de class = "titre"

const titres = document.getElementsByClassName("titre");
console.log(titres);


// Exercice 2 : récupérer les éléments de class = "text"

const texts = document.getElementsByClassName("text");
console.log(texts);


/* Exercice 3 : récupérer  :
        - l'élément de id = "titre1"
        - l'élément de id = "p1"
*/

const titre1 = document.getElementById("titre1");
const p1 = document.getElementById("p1");
console.log(titre1, p1);


/* Exercice 4 : récupérer les 3 inputs par leur name = "form"
*/

const forms = document.getElementsByName("form");
console.log(forms);


/* Exercice 5 : en utilisant querySelectorAll()récupérer  :
        - les éléments avec la class = "text"
        - les éléments avec la class = "titre"
*/

const textQueryAll = document.querySelectorAll(".text");
const titreQueryAll = document.querySelectorAll(".titre");
console.log(textQueryAll, titreQueryAll);


/* Exercice 6 : modifier le texte (utilisez textContent) du :
    - h1 avec "Les êtres vivants"
    - h2 avec "Les Animaux"
    - le premier h3 avec "Les Félins"
    - le deuxieme h3 avec "Les Canidés"
*/

titre1.textContent = "Les êtres vivants";

titres[1].textContent = "Les Animaux";

titres[2].textContent = "Les Félins";

titres[3].textContent = "Les Canidés";


/* Exercice 7 : modifier le HTML (utilisez innerHTML) du :
    - le premier paragraphe avec 
    "<ul>
        <li> Chat </li>
        <li> Tigre </li>
        <li> Lion </li>
     </ul>
    "
    - le deuxième paragraphe avec 
    "<ul>
        <li> Chien </li>
        <li> Loup </li>
        <li> Renard </li>
     </ul>
    "
*/

p1.innerHTML = "<ul><li> Chat : <img src='Images/Garfield_the_Cat.svg.png'> </li><li> Tigre : <img src='Images/figurine_tigrou_carton_taille_r_elle_1.jpg'></li><li> Lion : <img src='Images/331_LEROILIONXXW0089180_BAN1_2424_NEWTV.jpg'></li></ul>";


texts[1].innerHTML = "<ul><li> Chien <img src='Images/Snoopy_Peanuts.png'></li><li> Loup <img src='Images/téléchargé.jfif'></li><li> Renard <img src='Images/téléchargé.png'></li></ul>";