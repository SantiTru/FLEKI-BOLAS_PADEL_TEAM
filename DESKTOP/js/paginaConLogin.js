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
