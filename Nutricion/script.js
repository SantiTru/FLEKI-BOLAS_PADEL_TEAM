document.getElementById("searchForm").addEventListener("submit", function(event) {
    event.preventDefault();

    console.log("Formulario enviado");

    const diet = document.getElementById("diet").value;
    const ingredients = document.getElementById("ingredients").value;

    const apiKey = "8c1207e4e4cd4095b3673d788992c549";
    let apiURL = `https://api.spoonacular.com/recipes/complexSearch?apiKey=${apiKey}`;

    if (diet) apiURL += `&diet=${diet}`;
    if (ingredients) apiURL += `&includeIngredients=${encodeURIComponent(ingredients)}`;

    console.log("URL de la API: ", apiURL);

    fetch(apiURL)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP status ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log("Datos recibidos de la API: ", data);
            displayResults(data.results);
        })
        .catch(error => {
            console.error("Error fetching data: ", error);
            alert("Error al buscar recetas");
        });
});

function displayResults(recipes) {
    const resultsContainer = document.getElementById("results");
    resultsContainer.innerHTML = "";

    if (!recipes || recipes.length === 0) {
        resultsContainer.innerHTML = "<p>No se encontraron recetas.</p>";
        return;
    }

    console.log("Mostrando recetas: ", recipes);

    recipes.forEach(recipe => {
        const recipeElement = document.createElement("div");
        recipeElement.classList.add("recipe");
        recipeElement.innerHTML = `
            <h3>${recipe.title}</h3>
            <img src="${recipe.image}" alt="${recipe.title}" style="width:100%; max-width:300px; border-radius:8px;">
            <button class="detail-button" data-id="${recipe.id}">Ver Detalles</button>
        `;
        resultsContainer.appendChild(recipeElement);

        const button = recipeElement.querySelector(".detail-button");
        button.addEventListener("click", function() {
            console.log("Botón 'Ver Detalles' clicado para receta ID: ", recipe.id);
            loadRecipeDetails(recipe.id);
        });
    });
}

function loadRecipeDetails(recipeId) {
    const apiKey = "8c1207e4e4cd4095b3673d788992c549";
    const url = `https://api.spoonacular.com/recipes/${recipeId}/information?apiKey=${apiKey}`;

    console.log("Cargando detalles para receta ID: ", recipeId);

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP status ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log("Detalles de la receta recibidos: ", data);
            showRecipeDetails(data);
        })
        .catch(error => {
            console.error("Error loading recipe details: ", error);
            alert("Error al cargar los detalles de la receta: " + error.message);
        });
}

function showRecipeDetails(recipe) {
    console.log("Mostrando detalles de la receta: ", recipe);

    const ingredientsHtml = recipe.extendedIngredients && recipe.extendedIngredients.length > 0
        ? recipe.extendedIngredients.map(ingredient => `<li>${ingredient.original}</li>`).join("")
        : "<li>Información sobre ingredientes no disponible.</li>";

    const stepsHtml = recipe.analyzedInstructions && recipe.analyzedInstructions.length > 0 && recipe.analyzedInstructions[0].steps && recipe.analyzedInstructions[0].steps.length > 0
        ? recipe.analyzedInstructions[0].steps.map(step => `<li>${step.step}</li>`).join("")
        : "<li>Instrucciones detalladas no disponibles.</li>";

    const nutrientsHtml = recipe.nutrition && recipe.nutrition.nutrients && recipe.nutrition.nutrients.length > 0
        ? recipe.nutrition.nutrients.map(nutrient => `<p>${nutrient.title}: ${nutrient.amount}${nutrient.unit}</p>`).join("")
        : "<p>Información nutricional no disponible.</p>";

    const detailsHtml = `
        <div class="details-container">
            <p class="detail-title">Ingredientes:</p>
            <ul>${ingredientsHtml}</ul>
            <p class="detail-title">Instrucciones:</p>
            <ol>${stepsHtml}</ol>
            <p class="detail-title">Información Nutricional:</p>
            <div class="detail-content">${nutrientsHtml}</div>
        </div>
    `;

    showFullscreen(detailsHtml);
}

function showFullscreen(detailsHtml) {
    console.log("Mostrando pantalla completa");
    const fullscreenDiv = document.createElement("div");
    fullscreenDiv.classList.add("fullscreen");
    fullscreenDiv.innerHTML = `
        <button class="close-button">Cerrar</button>
        <div class="recipe-content">
            ${detailsHtml}
        </div>
    `;

    document.body.appendChild(fullscreenDiv);

    const closeButton = fullscreenDiv.querySelector(".close-button");
    closeButton.addEventListener("click", function() {
        document.body.removeChild(fullscreenDiv);
    });
}