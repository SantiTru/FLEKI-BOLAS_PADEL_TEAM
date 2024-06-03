import React from 'react';
import logoFleki from '../assets/imagen/logo-fleki.png';
import './Navbar.css';

const Navbar = () => {
  return (
    <nav className="navegacion">
      <div className="header">
        <div className="fleki-bolas-padel-team">FLEKI-BOLAS PÁDEL TEAM</div>
        <div className="logo-fleki-container">
          <img src={logoFleki} alt="logo-fleki" className="logo-fleki" />
        </div>
        <a href="#zona-sobre-el-equipo" className="link">
          <div className="sobre-el-equipo">SOBRE EL EQUIPO</div>
        </a>
        <div className="icono-usuario">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="85"
            height="90"
            viewBox="0 0 85 90"
            fill="none"
            className="icono-usuario"
          >
            <path
              d="M42.5 15C46.2572 15 49.8605 16.5804 52.5173 19.3934C55.1741 22.2064 56.6666 26.0218 56.6666 30C56.6666 33.9782 55.1741 37.7936 52.5173 40.6066C49.8605 43.4196 46.2572 45 42.5 45C38.7427 45 35.1394 43.4196 32.4826 40.6066C29.8258 37.7936 28.3333 33.9782 28.3333 30C28.3333 26.0218 29.8258 22.2064 32.4826 19.3934C35.1394 16.5804 38.7427 15 42.5 15ZM42.5 52.5C58.1541 52.5 70.8333 59.2125 70.8333 67.5V75H14.1666V67.5C14.1666 59.2125 26.8458 52.5 42.5 52.5Z"
              fill="black"
            />
          </svg>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
