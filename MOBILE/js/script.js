document.addEventListener('DOMContentLoaded', function() {
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


document.addEventListener("DOMContentLoaded", function () {
  const video = document.getElementById("background-video");
  const playPauseBtn = document.getElementById("play-pause-btn");
  const muteUnmuteBtn = document.getElementById("mute-unmute-btn");

  playPauseBtn.addEventListener("click", function () {
      if (video.paused) {
          video.play();
          playPauseBtn.textContent = "Pause";
      } else {
          video.pause();
          playPauseBtn.textContent = "Play";
      }
  });

  muteUnmuteBtn.addEventListener("click", function () {
      if (video.muted) {
          video.muted = false;
          muteUnmuteBtn.textContent = "Mute";
      } else {
          video.muted = true;
          muteUnmuteBtn.textContent = "Unmute";
      }
  });
});
