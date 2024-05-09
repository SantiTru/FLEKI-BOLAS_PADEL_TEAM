document.addEventListener("DOMContentLoaded", () => {
  // Variables globales para seleccionar elementos del DOM
  const listaCursos = document.getElementById("lista-carrito");
  
  const vaciarCarritoBtn = document.getElementById("vaciar-carrito");
  const imgCarrito = document.getElementById("img-carrito");
  const carrito = document.getElementById("carrito");
  const cerrarCarritoBtn = document.getElementById("cerrar-carrito");

  
  // Variable global para almacenar los cursos en el carrito
  let carritoCursos = [];

  function iniciarApp() {
    // Al cargar la página, intentamos recuperar el carrito desde localStorage
    const carritoGuardado = localStorage.getItem("carrito");
    if (carritoGuardado) {
      carritoCursos = JSON.parse(carritoGuardado);
      actualizarCarrito();
    }

    // Añadimos eventos a los botones
    const tarjetasCursosBoton = document.querySelectorAll(".boton-comprar");
    tarjetasCursosBoton.forEach((tarjetaCurso) => {
      tarjetaCurso.addEventListener("click", añadirCursoCuandoClikas);
    });

    // Evento para mostrar el carrito al hacer clic en la imagen del carrito
    imgCarrito.addEventListener("click", () => {
      carrito.classList.toggle("carrito-visible");
    });

    // Evento para ocultar el carrito al hacer clic en el botón de cerrar
    cerrarCarritoBtn.addEventListener("click", () => {
      carrito.classList.remove("carrito-visible");
    });

    vaciarCarritoBtn.addEventListener("click", vaciarCarrito);
  }

  // Función para añadir curso al carrito al hacer clic en "Agregar Al Carrito"
  function añadirCursoCuandoClikas(event) {
    const button = event.target;
    const card = button.closest(".card");

    const nuevoCurso = {
      titulo: card.querySelector(".card-title").textContent,
      autor: card.querySelector(".card-author").textContent,
      precio: card.querySelector(".card-precio").textContent,
      cantidad: 1, 
    };

    // Verificamos si el curso ya está en el carrito
    const cursoExistente = carritoCursos.find((curso) => curso.titulo === nuevoCurso.titulo);

    if (cursoExistente) {
      // Si el curso ya está en el carrito, actualizamos la cantidad
      cursoExistente.cantidad++;
    } else {
      // Si el curso no está en el carrito, lo añadimos
      carritoCursos.push(nuevoCurso);
    }

    // Actualizamos la lista de cursos en el carrito
    actualizarCarrito();
  }

  // Función para actualizar la lista de cursos en el carrito
  function actualizarCarrito() {
    // Limpiamos la lista actual
    listaCursos.innerHTML = "<tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr>";

    // Recorremos la lista de cursos en el carrito y creamos las filas correspondientes
    carritoCursos.forEach((item, index) => {
      const filaCursoCarrito = document.createElement("tr");
      filaCursoCarrito.innerHTML += `
        <td>${item.titulo}</td>
        <td>${item.precio}</td>
        <td><input type="number" class="input-cantidad" value="${item.cantidad}" id="input-cantidad-${index}"></td>
        <td><a href="#" class="borrar-curso" data-index="${index}">X</a></td>
      `;
      listaCursos.appendChild(filaCursoCarrito);
    });

    // Almacenamos el carrito en localStorage
    localStorage.setItem("carrito", JSON.stringify(carritoCursos));

    // Manejamos el clic en la "X" para borrar cursos
    const botonesBorrar = document.querySelectorAll(".borrar-curso");
    botonesBorrar.forEach((boton) => {
      boton.addEventListener("click", (event) => {
        event.preventDefault();
        const index = event.target.dataset.index;
        carritoCursos.splice(index, 1); // Eliminamos el curso del carrito
        actualizarCarrito(); // Actualizamos la visualización del carrito
      });
    });
  }

  // Función para vaciar el carrito
  function vaciarCarrito() {
    // Vaciamos la lista de cursos y actualizamos el carrito
    carritoCursos = [];
    actualizarCarrito();

    // Limpiamos localStorage al vaciar el carrito
    localStorage.removeItem("carrito");
  }

  // Al cargar la página, iniciamos la aplicación
  iniciarApp();
});
