import React from 'react'
import Batman from '../images/batman.jpg'
import Superman from '../images/superman.jpeg'
import WonderWoman from '../images/wonderwoman.jpg'

const Hero = ({name, civilName, mainColor}) => {

  const fetchPicture = (name) => {
    const hero = {
      "Batman" : Batman,
      "Superman" : Superman,
      "Wonder Woman" : WonderWoman
    }

    return hero [name];
  }

  const heroCard = `hero-card ${mainColor}`;
  console.log(heroCard);

  return (
    <div>
        <img src={fetchPicture(name)} alt={name}/>
        <div>
            <p>nom : {name}</p>
            <p>nom civil : {civilName}</p>
        </div>
    </div>
  )
}

export default Hero