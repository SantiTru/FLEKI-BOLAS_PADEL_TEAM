// registerUser.js
const { default: axios } = require('axios');
const api = require('./api');

async function registerUser(name, email, password) {
    try {
        const response = await api.post('/register', {
            name,
            email,
            password,
        });
        console.log('User registered successfully:', response.data);
        // Guardar el token si es necesario
        const token = response.data.token;
        // Realizar alguna acción con el token, como guardarlo en una variable o en un archivo
    } catch (error) {
        console.error('Error registering user:', error.response ? error.response.data : error.message);
    }
}

function getUsers(){
    axios({
        url:"https://jsonplaceholder.typicode.com/users", //dirección a la que pedir los datos de los usuarios
        method: "GET"
    })
    .then((res) => console.log(res))
    .catch((err) => console.log(err));

}

getUsers()


module.exports = registerUser;
