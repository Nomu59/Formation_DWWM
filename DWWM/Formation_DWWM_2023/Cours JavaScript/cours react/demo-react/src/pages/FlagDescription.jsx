import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const FlagDescription = () => {
    const params = useParams();

    const [country, setCountry] = useState([]);

    useEffect(() => {
        fetch("https://restcountries.com/v3.1/alpha/" + params.id)
        .then(response => response.json())
        .then(data => setCountry(data));
    }, [])

  return (
    <div>
        <h1>Description du pays: {country[0]?.translations.fra.official}</h1>
        <p>-Nom commun: {country[0]?.translations.fra.common}</p>
        <p>-Nom officiel: {country[0]?.translations.fra.official}</p>
        <p>-Population: {country[0]?.population} habitants</p>
        <p>-Capitale: {country[0]?.capital}</p>
        <p>-Drapeau: <img src={country[0]?.flags.png} alt="flag" /></p>
        <p>-Coordonnées GPS de la capitale: <br />
        -Latitude: {country[0]?.capitalInfo.latlng[0]} <br />
        -Longitude: {country[0]?.capitalInfo.latlng[1]}</p>
        <p>-Continent: {country[0]?.continents}</p>
        <p>-Nom des habitantes: {country[0]?.demonyms.fra.f}</p>
        <p>-Nom des habitants: {country[0]?.demonyms.fra.m}</p>
        <p>-Description du drapeau: {country[0]?.flags.alt}</p>
    </div>
  )
}

export default FlagDescription