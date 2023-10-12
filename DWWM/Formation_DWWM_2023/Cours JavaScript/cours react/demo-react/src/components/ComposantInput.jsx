import React, {useState} from 'react'

const ComposantInput = () => {
    const [title, setTitle] = useState([])
    const changeText = e => {
        setTitle(e.target.value);
    }

    return (
        <div>
            <h1>{title}</h1>
            <label htmlFor="inputText">
                Votre titre :
                <input onChange={e => changeText (e)} type="text" id="inputText" value={title}/>
            </label>
        </div>
    )
}

export default ComposantInput