<?php
require_once 'config/auth.php';
require_once 'config/config.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevo_usuario = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe
    $verificar = $conexion->prepare("SELECT id FROM usuarios WHERE username = ?");
    $verificar->bind_param("s", $nuevo_usuario);
    $verificar->execute();
    $resultado = $verificar->get_result();

    if ($resultado->num_rows > 0) {
        // Ya existe un usuario con ese nombre
        $mensaje = "El usuario ya existe.";
    } else {
        // Insertar el nuevo usuario
        $stmt = $conexion->prepare("INSERT INTO usuarios (username, password) VALUES (?, SHA2(?, 256))");
        $stmt->bind_param("ss", $nuevo_usuario, $password);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $mensaje = "Usuario añadido correctamente.";
        } else {
            $mensaje = "Error al añadir usuario.";
        }

        $stmt->close();
    }

    $verificar->close();
}
?>