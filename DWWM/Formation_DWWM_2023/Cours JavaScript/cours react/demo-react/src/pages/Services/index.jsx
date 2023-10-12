import React from 'react';
import {Link, Outlet} from "react-router-dom";

const Services = () => {
  return (
    <div>
        <h1>Nos Services</h1>
        <nav>
            <Link to="/services/marketing">Marketing</Link>
            <Link to="/services/development">Développement</Link>
        </nav>
        <Outlet/>
    </div>
  )
}

export default Services