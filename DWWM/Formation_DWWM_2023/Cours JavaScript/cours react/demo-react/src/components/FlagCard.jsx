import React from 'react'
import { useNavigate } from 'react-router-dom'

const FlagCard = ({flag}) => {
    const navigate = useNavigate();

    const goToDescription = (code) => {
        // alert(code);
        navigate("/flags/" + code);
    }

    return (
        <div className='flag-card' onClick={() => goToDescription(flag.ccn3)}>
            <p>{flag.name.official}</p>
            <img src={flag.flags.png} alt={flag.name.official} />
        </div>
    )
}

export default FlagCard