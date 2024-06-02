import React from 'react';
import pinchaAqui from '../assets/imagen/pincha aqui.png';
import './Section4.css';

const Section4 = () => {
  return (
    <div className="contenedor-zona-4" id="zona-sobre-el-equipo">
      <div className="contenedor-zona-4-2">
        <div className="contenedor-zona-4-texto">
          <p className="texto-zona-4-1 u-margin-bottom-small">
            En el año 2022 diferentes chicas de Málaga comenzaron su andadura por en mundo del pádel y tantos eran los buenos momentos que pasaban en las pistas que decidieron buscar un club para organizar un equipo y poder jugar diferentes ligas así como torneos, pool, enfrentamientos amistosos... Cada una de ellas fueron al mismo lugar, GM Pádel Málaga Indoor, donde se encontraron y su inicio comenzó como equipo. Empezaron a jugar la liga más famosa que hay en la provincia que es la SNP (Series Nacionales de Pádel).
          </p>
          <p className="texto-zona-4-2 u-margin-bottom-small">
            Todas y cada una son diferentes pero tienen algo en común: EL PÁDEL, el cual a cada una de ellas le llevó su práctica por diferentes motivos pero con un mismo final: DIVERTIRSE, PASARLO BIEN Y HACER EQUIPO.
          </p>
          <p className="texto-zona-4-3 u-margin-bottom-samll">
            Si te llama la atención y quieres tener más información y pasar buenos momentos únete a nosotras.
          </p>
        </div>
        <a href="./login.html" className="link">
          <div className="contenedor-zona-4-bis">
            <img src={pinchaAqui} alt="botón pincha aquí" className="imagen-zona-4-2"/>
          </div>
        </a>
      </div>
    </div>
  );
};

export default Section4;
