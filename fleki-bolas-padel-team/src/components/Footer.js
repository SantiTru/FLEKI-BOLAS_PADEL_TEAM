import React from 'react';
import '../assets/css/Footer.css';

const Footer = () => {
  return (
    <footer className="footer">
      <div className="container">
        <div className="row">
          <div className="col">
            <h3>Contacto</h3>
            <p>Dirección: C. Frederick Terman, 3, Campanillas</p>
            <p>29590 Málaga</p>
            <p>Teléfono: +34 687-425-789</p>
            <p>Email: flekibolas.padelteam@gmail.com</p>
          </div>
          <div className="col">
            <h3>Redes Sociales</h3>
            <p>Facebook: @flekibolas</p>
            <p>Twitter: @eflekibolas</p>
            <p>Instagram: @flekibolas</p>
          </div>
          <div className="col">
            <h3>Categorias</h3>
            <p>Cursos y clases de pádel</p>
            <p>Alquiler de pistas</p>
            <p>Asesoramiento en nutrición</p>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
