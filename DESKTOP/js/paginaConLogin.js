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


document.addEventListener("DOMContentLoaded", function() {
  // Obtener referencias a todos los botones "Inscribirme" con diferentes clases
  var inscripcionEntrenoButtons = document.querySelectorAll(".inscripcion-entreno");
  var inscripcionTorneosButtons = document.querySelectorAll(".inscripcion-torneos");
  var inscripcionLigasButtons = document.querySelectorAll(".inscripcion-ligas");

  // Función para mostrar el formulario de inscripción
  function mostrarFormulario() {
      document.getElementById("modal").style.display = "block";
  }

  // Agregar controladores de eventos a los botones "Inscribirme" de entrenos
  inscripcionEntrenoButtons.forEach(function(button) {
      button.addEventListener("click", mostrarFormulario);
  });

  // Agregar controladores de eventos a los botones "Inscribirme" de torneos
  inscripcionTorneosButtons.forEach(function(button) {
      button.addEventListener("click", mostrarFormulario);
  });

  // Agregar controladores de eventos a los botones "Inscribirme" de ligas
  inscripcionLigasButtons.forEach(function(button) {
      button.addEventListener("click", mostrarFormulario);
  });

  // Agregar un controlador de eventos al botón de cierre para ocultar el formulario
  var closeButton = document.querySelector(".cerrar-modal");
  if (closeButton) {
      closeButton.addEventListener("click", function() {
          document.getElementById("modal").style.display = "none";
      });
  } else {
      console.error("No se encontró el botón de cierre.");
  }

  // Agregar un controlador de eventos al formulario para prevenir el comportamiento predeterminado cuando se envía
  var form = document.querySelector("#modal form");
  if (form) {
      form.addEventListener("submit", function(event) {
          event.preventDefault();

          console.log("Formulario enviado");
      });
  } else {
      console.error("No se encontró el formulario.");
  }
});




