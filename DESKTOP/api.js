// api.js
const axios = require('axios');

const api = axios.create({
    baseURL: 'http://localhost/api', // Ajusta la URL según tu backend
    headers: {
        'Content-Type': 'application/json',
    },
});

module.exports = api;
