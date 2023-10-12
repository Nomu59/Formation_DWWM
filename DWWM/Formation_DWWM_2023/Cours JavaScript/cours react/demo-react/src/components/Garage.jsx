import React, {useState} from 'react'
import Voiture from './Voiture'

const Garage = () => {
    const [voitures, setVoitures] = useState([
        {
            marque : "Mercedes",
            couleur : "gris",
            annee : 1999
        },
        {
            marque : "Opel",
            couleur : "rouge",
            annee : 2015
        },
        {
            marque : "Citröen",
            couleur : "bleu",
            annee : 2019
        },
        {
            marque : "Peugeot",
            couleur : "vert",
            annee : 2021
        }
        ])

    return (
        <div id='garage'>
            Mon garage se compose de ces voitures :
            {/* <Voiture marque={voitures[0].marque} couleur={voitures[0].couleur} annee={voitures[0].annee}/>
            <Voiture marque={voitures[1].marque} couleur={voitures[1].couleur} annee={voitures[1].annee}/>
            <Voiture marque={voitures[2].marque} couleur={voitures[2].couleur} annee={voitures[2].annee}/> */}
            {
                voitures.map((voiture, index) => <Voiture key={index} marque={voiture.marque} couleur={voiture.couleur} annee={voiture.annee}/>)
            }
        </div>
    )
}

export default Garage