import React from 'react'

const Voiture = ({marque, couleur, annee}) => {
// const {marque, couleur, annee} = props;
  return (
    <div className='voiture'>
        <p>
          marque : {marque}
        </p>
        <p>
          couleur : {couleur}
        </p>
        <p>
          annee : {annee}
        </p>
    </div>
  )
}

export default Voiture