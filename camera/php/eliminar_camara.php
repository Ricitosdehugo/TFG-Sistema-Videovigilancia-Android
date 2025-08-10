<?php
require_once 'config/auth.php';
require_once 'config/config.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    $stmt = $conexion->prepare("DELETE FROM camaras WHERE nombre = ?");
    $stmt->bind_param("s", $nombre);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $mensaje = "Cámara eliminada correctamente.";
    } else {
        $mensaje = "No se encontró ninguna cámara con ese nombre.";
    }

    $stmt->close();
}