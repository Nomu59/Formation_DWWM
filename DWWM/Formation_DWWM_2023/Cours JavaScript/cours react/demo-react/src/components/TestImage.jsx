import React from 'react'
import Ours from '../images/ours.png'

const TestImage = () => {
  return (
    <div>
        {/* mon image doit se trouver dans le dossier public pour que ça fonctionne */}
        <img src="./images/ours.png" alt="ours polaire"/>

        {/* 2ème façon, importer l'image */}
        <img src={Ours} alt="ours polaire import" />
    </div>
  )
}

export default TestImage