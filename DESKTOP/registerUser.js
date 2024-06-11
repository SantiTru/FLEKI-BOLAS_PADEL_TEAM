// registerUser.js
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

module.exports = registerUser;
