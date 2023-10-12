import React, {useState} from 'react'
import ComposantEnfant from './ComposantEnfant'

const ComposantParent = () => {
    const [variable, setVariable] = useState("Je suis une variable venant du parent");

    function fonctionParentEnfant() {
        alert("je suis passé par les props");
    }

  return (
    <div id="parent">
        Composant parent
        <ComposantEnfant data={variable}
        transfert={fonctionParentEnfant}/>
    </div>
  )
}

export default ComposantParent