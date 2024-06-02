import React from 'react';
import './Footer.css';

const Footer = () => {
  return (
    <footer className="footer">
      <div className="container">
        <div className="row">
          <div className="col">
            <h3>Contacto</h3>
            <p>Dirección: Calle Ejemplo, 123</p>
            <p>Teléfono: +34 123 456 789</p>
            <p>Email: info@ejemplo.com</p>
          </div>
          <div className="col">
            <h3>Redes Sociales</h3>
            <p>Facebook: @ejemplo</p>
            <p>Twitter: @ejemplo</p>
            <p>Instagram: @ejemplo</p>
          </div>
          <div className="col">
            <h3>Horario</h3>
            <p>Lunes a Viernes: 9am - 9pm</p>
            <p>Sábado: 10am - 6pm</p>
            <p>Domingo: Cerrado</p>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
