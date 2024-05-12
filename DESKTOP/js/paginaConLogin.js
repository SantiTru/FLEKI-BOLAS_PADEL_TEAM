document.addEventListener("DOMContentLoaded", function() {
  // Configuración del carrusel
  let currentImageIndex = 0;
  const images = document.querySelectorAll(".carrusel-imagen");
  const intervalTime = 2000; // Cambiar la imagen cada 1 segundos

  // Función para mostrar la siguiente imagen
  function showNextImage() {
    images[currentImageIndex].style.display = "none"; // Oculta la imagen actual
    currentImageIndex = (currentImageIndex + 1) % images.length; // Calcula el índice de la siguiente imagen
    images[currentImageIndex].style.display = "block"; // Muestra la siguiente imagen
  }

  // Mostrar la siguiente imagen automáticamente cada intervalTime milisegundos
  setInterval(showNextImage, intervalTime);
});


// Formulario de inscripción

// Obtener todos los botones de inscripción
const botonesInscripcion = document.querySelectorAll(".inscripcion-entreno, .inscripcion-torneos, .inscripcion-ligas");

// Obtener el formulario de inscripción
const formularioInscripcion = document.getElementById("formulario-inscripcion");

// Función para mostrar el formulario
function mostrarFormulario() {
  formularioInscripcion.style.display = "block";
}

// Añadir evento de clic a cada botón de inscripción
botonesInscripcion.forEach(boton => {
  boton.addEventListener("click", mostrarFormulario);
});



