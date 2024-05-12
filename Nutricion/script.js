document.getElementById('searchForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Obtener los valores del formulario
  const minProtein = document.getElementById('minProtein').value;
  const maxProtein = document.getElementById('maxProtein').value;
  const minFat = document.getElementById('minFat').value;
  const maxFat = document.getElementById('maxFat').value;
  const minCarbs = document.getElementById('minCarbs').value;
  const maxCarbs = document.getElementById('maxCarbs').value;

  // Construir la URL para la API de Spoonacular
  const apiKey = '00f06a47922e7dc5f1edc3ead829bd7eb8e2a06a'; // Reemplaza YOUR_API_KEY con tu clave de API de Spoonacular
  const apiURL = `https://api.spoonacular.com/recipes/findByNutrients?apiKey=${apiKey}&minProtein=${minProtein}&maxProtein=${maxProtein}&minFat=${minFat}&maxFat=${maxFat}&minCarbs=${minCarbs}&maxCarbs=${maxCarbs}`;

  // Hacer la petición a la API
  fetch(apiURL)
      .then(response => response.json())
      .then(data => {
          // Mostrar los resultados
          displayResults(data);
      })
      .catch(error => {
          console.error('Error fetching data: ', error);
          alert('Error al buscar recetas');
      });
});

function displayResults(recipes) {
  const resultsContainer = document.getElementById('results');
  resultsContainer.innerHTML = ''; // Limpiar resultados anteriores

  if (recipes.length === 0) {
      resultsContainer.innerHTML = '<p>No se encontraron recetas.</p>';
      return;
  }

  // Crear y añadir las tarjetas de recetas
  recipes.forEach(recipe => {
      const recipeElement = document.createElement('div');
      recipeElement.classList.add('recipe');
      recipeElement.innerHTML = `
          <h3>${recipe.title}</h3>
          <p><strong>Proteínas:</strong> ${recipe.protein}g</p>
          <p><strong>Grasas:</strong> ${recipe.fat}g</p>
          <p><strong>Carbohidratos:</strong> ${recipe.carbs}g</p>
          <img src="${recipe.image}" alt="${recipe.title}" style="width:100%; max-width:300px; border-radius:8px;">
      `;
      resultsContainer.appendChild(recipeElement);
  });
}
