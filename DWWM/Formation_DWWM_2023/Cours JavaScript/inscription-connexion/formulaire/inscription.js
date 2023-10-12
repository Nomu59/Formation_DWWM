class Personne {
    constructor (nom, prenom,email, password){
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.password = password;
    }
}
let dataClient = []
let stringDataClient = localStorage.getItem("dataClient");
if(stringDataClient){
    dataClient = JSON.parse(stringDataClient);
}



/**********************************************************
*                       Inscription
 **********************************************************/

const inputPrenom = document.getElementById("prenom");
const inputNom = document.getElementById("nom");
const inputEmail = document.getElementById("email");
const inputPassword = document.getElementById("password");
const inputPasswordConfirm = document.getElementById("password-confirm");
const submitBtn = document.getElementById("submit-btn");

submitBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if(inputPassword.value === inputPasswordConfirm.value){
        dataClient.push(
            new Personne(
                inputNom.value,
                inputPrenom.value,
                inputEmail.value,
                inputPassword.value
            )
        )
        history.back();
    }else{
        alert("Le mot de passe et sa confirmation ne sont pas identique !")
    }
    console.log(dataClient);
    localStorage.setItem("dataClient",JSON.stringify(dataClient));
    
})

/**********************************************************
*                       Connexion
 **********************************************************/

const btnTest = document.getElementById("btn-test");

btnTest.addEventListener("click",()=> {
    console.log("data",dataClient);
})

