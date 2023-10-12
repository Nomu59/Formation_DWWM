import React, {useState, useEffect} from 'react';
import FlagCard from '../components/FlagCard';

const Flags = () => {
    const [flags, setFlags] = useState([]);

    useEffect(() => {
        fetch("https://restcountries.com/v3.1/all")
        .then(response => response.json())
        .then(data => setFlags(data));
}, [])

    return (
        <div className='flags'>
            {flags.map((flag, index) =>
                <FlagCard key={index} flag={flag}/>
            )}
        </div>
    )
}

export default Flags