<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}

require_once 'config/config.php';

$conexion = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

$error = "";
if (isset($_GET['autodelete']) && $_GET['autodelete'] == 1) {
    $error = "¡Te has eliminado a ti mismo!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Consulta SQL para buscar usuario y contraseña en la base de datos
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE username = ? AND password = SHA2(?, 256)");
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $usuario;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }

    $stmt->close();
}
?>