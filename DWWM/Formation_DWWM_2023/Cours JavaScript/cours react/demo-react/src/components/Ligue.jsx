import React, {useState} from 'react'
import Hero from './Hero'

const Ligue = () => {
    const [heros, setHeros] = useState([
        {
            name: "Batman",
            civilName: "Bruce Wayne",
            mainColor: "noir"
        },
        {
            name: "Superman",
            civilName: "Clark Kent",
            mainColor: "bleu"
        },
        {
            name: "Wonder Woman",
            civilName: "Diana Prince",
            mainColor: "rouge"
        }
    ])

  return (
    <div>
        La ligue se compose de ces héros :
        {
            heros.map((hero, index) => <Hero key={index} name={hero.name} civilName={hero.civilName} mainColor={hero.mainColor}/> )
        }
    </div>
  )
}

export default Ligue