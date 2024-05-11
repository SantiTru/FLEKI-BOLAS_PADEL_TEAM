document.addEventListener('DOMContentLoaded', function() {
  // Obtener las divisiones de la zona 3
  const imagenZona31 = document.querySelectorAll('.imagen-zona-3-1');
  const imagenZona32 = document.querySelectorAll('.imagen-zona-3-2');

  // Obtener el contenedor de la zona 4
  const contenedorZona4 = document.querySelector('.contenedor-zona-4');
  const contenedorZona4bis = document.querySelector('.contenedor-zona-4-bis');

  // Variable de estado para controlar el contenido mostrado
  let mostrarContenidoZona31 = false;

  // Función para mostrar el contenido de la zona 4 según el estado
  function mostrarContenido() {
    if (mostrarContenidoZona31) {
      contenedorZona4.innerHTML = `
        <div class="card-equipo">
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
      `;
      contenedorZona4bis.style.display = 'block';
    } else {
      contenedorZona4.innerHTML = `
        <div class="contenedor-zona-4">
          <img src="css/imagen/imagen-zona-4.jpg" alt="chica jugando a pádel" class="imagen-zona-4-1"/>
          <div class="contenedor-zona-4-2">
            <div class="contenedor-zona-4-texto">
              <p class="texto-zona-4-1 u-margin-bottom-small">
                En el año 2022 diferentes chicas de Málaga comenzaron su andadura
                por en mundo del pádel y tantos eran los buenos momentos que pasaban
                en las pistas que decidieron buscar un club para organizar un equipo
                y poder jugar diferentes ligas así como torneos, pool,
                enfrentamientos amistosos... Cada una de ellas fueron al mismo
                lugar, GM Pádel Málaga Indoor, donde se encontraron y su inicio
                comenzó como equipo. Empezaron a jugar la liga más famosa que hay en
                la provincia que es la SNP (Series Nacionales de Pádel).
              </p>
              <p class="texto-zona-4-2 u-margin-bottom-small">
                Todas y cada una son diferentes pero tienen algo en común: EL PÁDEL,
                el cual a cada una de ellas le llevó su práctica por diferentes
                motivos pero con un mismo final: DIVERTIRSE, PASARLO BIEN Y HACER
                EQUIPO.
              </p>
              <p class="texto-zona-4-3 u-margin-bottom-small">
                Si te llama la atención y quieres tener más información y pasar
                buenos momentos únete a nosotras.
              </p>
            </div>
            <div class="contenedor-zona-4-bis">
              <img src="css/imagen/pincha aqui.png" alt="botón pincha aquí" class="imagen-zona-4-2"/>
            </div>
          </div>
        </div>
      `;
      contenedorZona4bis.style.display = 'none';
    }
  }

  // Mostrar el contenido de la imagenZona32 al inicio
  mostrarContenido();

  // Agregar evento de clic a todas las divisiones de la zona 3
  imagenZona32.forEach(div => {
    div.addEventListener('click', function() {
      mostrarContenidoZona31 = true; // Cambia el estado
      mostrarContenido(); // Muestra el contenido correspondiente
    });
  });

  imagenZona31.forEach(div => {
    div.addEventListener('click', function() {
      mostrarContenidoZona31 = false; // Cambia el estado
      mostrarContenido(); // Muestra el contenido correspondiente
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
});
