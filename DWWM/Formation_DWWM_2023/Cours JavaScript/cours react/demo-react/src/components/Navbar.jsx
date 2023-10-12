import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  return (
    <nav>
        <Link to="/"> Accueil </Link>
        <Link to="/services"> Services </Link>
        <Link to="/login"> Login </Link>
        <Link to="/composant-enfant"> Composant Enfant </Link>
        <Link to="/composant-event"> Composant Event </Link>
        <Link to="/composant-input"> Composant Input </Link>
        <Link to="/composant-parent"> Composant Parent </Link>
        <Link to="/garage"> Garage </Link>
        <Link to="/hero"> Hero </Link>
        <Link to="/ligue"> Ligue </Link>
        <Link to="/test-image"> Test Image </Link>
        <Link to="/voiture"> Voiture </Link>
        <Link to="/flags"> Flags </Link>
    </nav>
  )
}

export default Navbar