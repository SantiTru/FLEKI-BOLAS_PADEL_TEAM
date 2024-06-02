import React from 'react';
import card1 from '../assets/imagen/card-1.jpg';
import card2 from '../assets/imagen/card-2.jpg';
import card3 from '../assets/imagen/card-3.jpg';
import './Section6.css';

const Section6 = () => {
  return (
    <div className="row">
      <div className="card">
        <img src={card1} alt="Imagen de la tarjeta" />
        <div className="card-text">
          <h3>CLASES/CURSOS DE PÁDEL</h3>
          <p>Descubre todos los cursos de pádel que nuestros entrenadores han preparado para ti</p>
        </div>
      </div>
      <div className="card">
        <img src={card2} alt="Imagen de la tarjeta" />
        <div className="card-text">
          <h3>RESERVA DE PISTAS</h3>
          <p>Podrás reservar pistas en el horario que mejor se ajuste a tus necesidades</p>
        </div>
      </div>
      <div className="card">
        <img src={card3} alt="Imagen de la tarjeta" />
        <div className="card-text">
          <h3>EQUIPOS PARA LIGAS Y TORNEOS</h3>
          <p>Forma parte de nuestros equipos para jugar ligas y torneos organizados</p>
        </div>
      </div>
    </div>
  );
};

export default Section6;
