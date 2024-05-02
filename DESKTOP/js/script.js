document.addEventListener('DOMContentLoaded', function() {
  // Obtener las imágenes de la zona 3
  const imagenZona31 = document.querySelectorAll('.imagen-zona-3-1');
  const imagenZona32 = document.querySelectorAll('.imagen-zona-3-2');

  // Obtener el contenedor de la zona 4
  const contenedorZona4 = document.querySelector('.contenedor-zona-4');
  const contenedorZona4bis = document.querySelector('.contenedor-zona-4-bis');

  // Agregar evento de clic a todas las imágenes de la zona 3
  imagenZona32.forEach(imagen => {
    imagen.addEventListener('click', function() {
      // Cambiar el contenido de contenedor-zona-4 al hacer clic en imagen-zona-3-2
      contenedorZona4.innerHTML = `<div class="card-equipo">
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    
      <div class="card-jugadora">
        <img src="css/imagen/cris.jpeg" alt="cris" class="card-imagen">
        <div class="card-texto">
          <p>Nombre: Cris</p>
          <p>Posición: Revés</p>
          <p>Pala: Bullpadel y StarVie</p>
        </div>
      </div>
    </div>
      `;
    contenedorZona4bis.style.display = 'none'; 
    });
  });

  // Obtener la imagen y el párrafo "Ver más"
  const imagenZona7 = document.querySelector('.imagen-zona-7-1');
  const verMas = document.querySelector('.texto-zona-7-1');

  // Definir las rutas de las imágenes
  const imagenes = [
    "css/imagen/imagen-zona-7-2.jpg",
    "css/imagen/imagen-zona-7-3.jpg",
    "css/imagen/imagen-zona-7-1.jpg",

    // Agrega más rutas de imágenes según sea necesario
  ];

  // Inicializar un contador para el índice de la imagen actual
  let indiceImagen = 0;

  // Agregar evento de clic al párrafo "Ver más"
  verMas.addEventListener('click', function() {
    // Cambiar la imagen cuando se hace clic en "Ver más"
    if (indiceImagen < imagenes.length - 1) {
      // Si hay más imágenes disponibles, cambia a la siguiente imagen
      indiceImagen++;
    } else {
      // Si ya has mostrado todas las imágenes, vuelve a la primera imagen
      indiceImagen = 0;
    }
    // Actualizar la ruta de la imagen
    imagenZona7.src = imagenes[indiceImagen];
  });
});


function mostrarInfo() {
  var tarjeta = document.getElementById("tarjeta-info");
  tarjeta.style.display = "block";
}

function ocultarInfo() {
  var tarjeta = document.getElementById("tarjeta-info");
  tarjeta.style.display = "none";
}


// Obtener el contenedor del calendario
const calendario = document.querySelector('.calendario');

// Obtener las flechas izquierda y derecha
const flechaIzquierda = document.querySelector('.flecha-izquierda');
const flechaDerecha = document.querySelector('.flecha-derecha');

// Configurar el desplazamiento al presionar las flechas
flechaDerecha.addEventListener('click', () => {
  calendario.scrollLeft += 150; // Desplazar 150 píxeles hacia la derecha
});

flechaIzquierda.addEventListener('click', () => {
  calendario.scrollLeft -= 150; // Desplazar 150 píxeles hacia la izquierda
});






























