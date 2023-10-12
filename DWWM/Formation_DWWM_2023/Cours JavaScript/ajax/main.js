// On crée un objet XMLHttpRequest
let xhr = new XMLHttpRequest();

// On initialise notre requêteavec open()
xhr.open("GET", "https://restcountries.com/v3.1/all");

// On veut une réponse au format JSON
// xhr.responseType = "json";

let btn = document.createElement("button");
btn.textContent = "Cliquez-moi";
document.body.appendChild(btn);
let container = document.getElementById("container");

btn.addEventListener("click", () => {
    xhr.onload = () => {
        let data = JSON.parse(xhr.responseText);
        data.map(country => {
            let div = document.createElement("div");
            div.classList.add("post");
            let pBody = document.createElement("p");
            pBody.textContent = "région : " + country.region;
            let id = document.createElement("h3");
            id.textContent = country.name.common;
            let drapeau = document.createElement("img");
            drapeau.src = country.flags.png;
            div.appendChild(id);
            div.appendChild(pBody);
            div.appendChild(drapeau);
            container.appendChild(div);
        });
    }

    // On envoie la requête
    xhr.send();
})

async function fetchCountriesJSON() {
    const response = await fetch("https://restcountries.com/v3.1/all");
    const countries2 = await response.json();
    return countries2;
}

fetchCountriesJSON().then(countries => {
    console.log(countries);
})