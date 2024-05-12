document.getElementById("searchForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const diet = document.getElementById("diet").value;
    const minProtein = document.getElementById("minProtein").value;
    const maxProtein = document.getElementById("maxProtein").value;
    const minFat = document.getElementById("minFat").value;
    const maxFat = document.getElementById("maxFat").value;
    const minCarbs = document.getElementById("minCarbs").value;
    const maxCarbs = document.getElementById("maxCarbs").value;

    const apiKey = "8c1207e4e4cd4095b3673d788992c549";
    let apiURL = `https://api.spoonacular.com/recipes/complexSearch?apiKey=${apiKey}`;

    if (diet) apiURL += `&diet=${diet}`;
    if (minProtein) apiURL += `&minProtein=${minProtein}`;
    if (maxProtein) apiURL += `&maxProtein=${maxProtein}`;
    if (minFat) apiURL += `&minFat=${minFat}`;
    if (maxFat) apiURL += `&maxFat=${maxFat}`;
    if (minCarbs) apiURL += `&minCarbs=${minCarbs}`;
    if (maxCarbs) apiURL += `&maxCarbs=${maxCarbs}`;

    fetch(apiURL)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP status ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
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

    recipes.forEach(recipe => {
        const recipeElement = document.createElement("div");
        recipeElement.classList.add("recipe");
        recipeElement.innerHTML = `
            <h3>${recipe.title}</h3>
            <img src="${recipe.image}" alt="${recipe.title}" style="width:100%; max-width:300px; border-radius:8px;">
            <button class="detail-button">Ver Detalles</button>
            <div id="details-${recipe.id}" class="details-container"></div>
        `;
        resultsContainer.appendChild(recipeElement);

        const button = recipeElement.querySelector(".detail-button");
        button.addEventListener("click", function() {
            loadRecipeDetails(recipe.id, button);
        });
    });
}

function loadRecipeDetails(recipeId, button) {
    const detailsContainer = document.getElementById(`details-${recipeId}`);
    if (detailsContainer.innerHTML !== "") {
        detailsContainer.style.display = detailsContainer.style.display === "none" ? "block" : "none";
        button.textContent = detailsContainer.style.display === "none" ? "Ver Detalles" : "Ocultar Detalles";
        return;
    }

    const apiKey = "8c1207e4e4cd4095b3673d788992c549";
    const url = `https://api.spoonacular.com/recipes/${recipeId}/information?apiKey=${apiKey}`;

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP status ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            showRecipeDetails(data, recipeId);
            button.textContent = "Ocultar Detalles";
        })
        .catch(error => {
            console.error("Error loading recipe details: ", error);
            alert("Error al cargar los detalles de la receta: " + error.message);
        });
}

function showRecipeDetails(recipe, recipeId) {
    const detailsContainer = document.getElementById(`details-${recipeId}`);
    detailsContainer.style.display = "block";

    const ingredientsHtml = recipe.extendedIngredients && recipe.extendedIngredients.length > 0
        ? recipe.extendedIngredients.map(ingredient => `<li>${ingredient.original}</li>`).join("")
        : "<li>Información sobre ingredientes no disponible.</li>";

    const stepsHtml = recipe.analyzedInstructions && recipe.analyzedInstructions.length > 0 && recipe.analyzedInstructions[0].steps && recipe.analyzedInstructions[0].steps.length > 0
        ? recipe.analyzedInstructions[0].steps.map(step => `<li>${step.step}</li>`).join("")
        : "<li>Instrucciones detalladas no disponibles.</li>";

    const nutrientsHtml = recipe.nutrition && recipe.nutrition.nutrients && recipe.nutrition.nutrients.length > 0
        ? recipe.nutrition.nutrients.map(nutrient => `<p>${nutrient.title}: ${nutrient.amount}${nutrient.unit}</p>`).join("")
        : "<p>Información nutricional no disponible.</p>";

    detailsContainer.innerHTML = `
        <p class="detail-title">Ingredientes:</p>
        <ul>${ingredientsHtml}</ul>
        <p class="detail-title">Instrucciones:</p>
        <ol>${stepsHtml}</ol>
        <p class="detail-title">Información Nutricional:</p>
        <div class="detail-content">${nutrientsHtml}</div>
    `;
}
