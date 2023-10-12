import { useEffect, useState } from 'react'
import './App.css'
import ComposantParent from './components/ComposantParent'
import ComposantEvent from './components/ComposantEvent'
import ComposantInput from './components/ComposantInput'
import Garage from './components/Garage'
import TestImage from './components/TestImage'
import Ligue from './components/Ligue'

function App() {
  const [prenom,setPrenom] = useState("Alex");
  const [age, setAge] = useState(21);
  const [count, setCount] = useState(0);

  function changeName() {
    setPrenom("Nomu");
  }

  function changeAge() {
    setAge(35);
  }

  useEffect(() => {
    changeName();
    changeAge();
    console.log(count);
  }, [count])
  
  return (
    <>
      {/* {console.log(prenom, age)} */}
      <h1>Hello {prenom} !!!</h1>
      <h1>Vous avez {age} ans</h1>
      <button onClick={() => setCount(count+1)}>+</button>
      {/* <ComposantParent/>
      <ComposantEvent/>
      <ComposantInput/> */}
      {/* <Garage/> */}
      {/* <TestImage/> */}
      {/* <Ligue/> */}
    </>
  )
}

export default App
