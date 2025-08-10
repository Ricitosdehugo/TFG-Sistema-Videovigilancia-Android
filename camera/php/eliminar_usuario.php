<?php
require_once 'config/auth.php';
require_once 'config/config.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_a_eliminar = $_POST['username'];
    $usuario_actual = $_SESSION['username'] ?? null;

    if ($usuario_a_eliminar === 'ricitosdehugo') {
        $mensaje = "¡No se puede eliminar al administrador!";
    } else {
        $stmt = $conexion->prepare("DELETE FROM usuarios WHERE username = ?");
        $stmt->bind_param("s", $usuario_a_eliminar);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $mensaje = "Usuario eliminado correctamente.";

            // Si el usuario eliminado es el actual, cerrar sesión y redirigir
            if ($usuario_a_eliminar === $usuario_actual) {
                session_destroy();
                header("Location: index.php?autodelete=1");
                exit;
            }
        } else {
            $mensaje = "No se encontró ningún usuario con ese nombre.";
        }

        $stmt->close();
    }
}
?>