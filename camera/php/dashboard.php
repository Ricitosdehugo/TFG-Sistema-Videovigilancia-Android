<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

require_once 'config/auth.php';
require_once 'config/config.php';

$usuario = $_SESSION['username'] ?? 'Usuario';

$camaras = [];
$resultado = $conexion->query("SELECT * FROM camaras");
if ($resultado && $resultado->num_rows > 0) {
    $camaras = $resultado->fetch_all(MYSQLI_ASSOC);
}