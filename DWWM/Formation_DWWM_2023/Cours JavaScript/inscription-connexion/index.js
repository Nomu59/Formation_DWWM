/********************************************************
 *                      Accueil
 *********************************************************/

const message = document.getElementById("message");
message.textContent = localStorage.getItem("connexion");
if(localStorage.getItem("connexion") === "connecté"){
    const disconnectBtn = document.createElement("button");
    disconnectBtn.textContent = "Deconnexion";
    disconnectBtn.addEventListener("click",()=>{
        localStorage.setItem("connexion", "non connecté");
        location.reload();
    })
    message.appendChild(disconnectBtn); 
}


