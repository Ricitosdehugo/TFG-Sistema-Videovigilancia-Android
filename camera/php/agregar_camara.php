<?php
require_once 'config/auth.php';
require_once 'config/config.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $ip = $_POST['ip'];
    $puerto = $_POST['puerto'];

    // Verificar si ya existe una cámara con ese nombre
    $verificar = $conexion->prepare("SELECT id FROM camaras WHERE nombre = ?");
    $verificar->bind_param("s", $nombre);
    $verificar->execute();
    $resultado = $verificar->get_result();

    if ($resultado->num_rows > 0) {
        // Ya existe una cámara con ese nombre
        $mensaje = "Ya existe una cámara con ese nombre.";
    } else {
        // Insertar nueva cámara
        $stmt = $conexion->prepare("INSERT INTO camaras (nombre, ip, puerto) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $ip, $puerto);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $mensaje = "Cámara añadida correctamente.";
        } else {
            $mensaje = "Error al añadir la cámara.";
        }

        $stmt->close();
    }

    $verificar->close();
}
?>