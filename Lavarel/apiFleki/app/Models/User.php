<?php

class User {
    private $db;

    public function __construct($db_connection) {
        $this->db = $db_connection;
    }

    // Método para registrar un nuevo usuario
    public function register($username, $password) {
        // Hash del password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Consulta SQL para insertar el nuevo usuario en la base de datos
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $username, $hashed_password);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true; // Registro exitoso
        } else {
            return false; // Error al registrar
        }
    }

    // Método para verificar el inicio de sesión del usuario
    public function login($username, $password) {
        // Consulta SQL para obtener el hash de la contraseña del usuario
        $query = "SELECT password FROM users WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Obtener el hash de la contraseña almacenada en la base de datos
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];
            
            // Verificar si la contraseña ingresada coincide con el hash almacenado
            if (password_verify($password, $hashed_password)) {
                return true; // Inicio de sesión exitoso
            } else {
                return false; // Contraseña incorrecta
            }
        } else {
            return false; // Usuario no encontrado
        }
    }
}

?>
