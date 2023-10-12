import React from 'react'

const ComposantEnfant = props => {
  return (
    <div id="enfant">{props.data}
        <button onClick={props.transfert}>info parent</button>
    </div>
  )
}

export default ComposantEnfant