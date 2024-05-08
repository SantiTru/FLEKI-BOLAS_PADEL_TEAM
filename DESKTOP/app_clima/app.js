window.addEventListener('load', () => {
  let temperaturaValor = document.getElementById('temperatura-valor');
  let temperaturaDescripcion = document.getElementById('temperatura-descripcion');
  let ubicacion = document.getElementById('ubicacion');
  let iconoAnimado = document.getElementById('icono-animado');
  let vientoVelocidad = document.getElementById('viento-velocidad');

  const searchBtn = document.getElementById('search-btn');
  const cityInput = document.getElementById('city-input');

  searchBtn.addEventListener('click', () => {
      const city = cityInput.value;
      const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&lang=es&units=metric&appid=25e7e4f280ebb9165a71e377b5e402d0`;

      fetch(url)
          .then(response => response.json())
          .then(data => {
              let temp = Math.round(data.main.temp);
              temperaturaValor.textContent = `${temp} ° C`;

              let desc = data.weather[0].description;
              temperaturaDescripcion.textContent = desc.toUpperCase();
              ubicacion.textContent = data.name;

              vientoVelocidad.textContent = `${data.wind.speed} m/s`;

              switch (data.weather[0].main) {
                  case 'Thunderstorm':
                      iconoAnimado.src = './app_clima/animated/thunder.svg';
                      break;
                  case 'Drizzle':
                      iconoAnimado.src = './app_clima/animated/rainy-2.svg';
                      break;
                  case 'Rain':
                      iconoAnimado.src = './app_clima/animated/rainy-7.svg';
                      break;
                  case 'Snow':
                      iconoAnimado.src = './app_clima/animated/snowy-6.svg';
                      break;
                  case 'Clear':
                      iconoAnimado.src = './app_clima/animated/day.svg';
                      break;
                  case 'Atmosphere':
                      iconoAnimado.src = './app_clima/animated/weather.svg';
                      break;
                  case 'Clouds':
                      iconoAnimado.src = './app_clima/animated/cloudy-day-1.svg';
                      break;
                  default:
                      iconoAnimado.src = './app_clima/animated/cloudy-day-1.svg';
              }
          })
          .catch(error => {
              console.log(error);
          });
  });
});
