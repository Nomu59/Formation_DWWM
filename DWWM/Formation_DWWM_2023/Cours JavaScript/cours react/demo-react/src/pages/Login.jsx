import React, {useState} from 'react'

const Login = () => {
  const [prenom, setPrenom] = useState("");
  const [nom, setNom] = useState("");

  function handleSubmit() {
    alert("Bonjour " + prenom + " " + nom);
  }

  function handleChange(e) {
    e.preventDefault();
    console.log(e.target.value, e.target.name);
    if (e.target.name == "nom") {
      setNom(e.target.value);
    }
    if (e.target.name == "prenom") {
      setPrenom(e.target.value);
    }
  }

  return (
    <div>
        <form onSubmit={handleSubmit}>
          Nom : <input onChange={handleChange} name='nom' type='text' />
          Prenom : <input onChange={handleChange} name='prenom' type='text' />
          Rue : <input onChange={handleChange} name='rue' type='text' />
          Code postal : <input onChange={handleChange} name='codePostal' type='text' />
          Ville : <input onChange={handleChange} name='ville' type='text' />
          <input type="submit" value="Envoyer" />
        </form>
    </div>
  )
}

export default Login