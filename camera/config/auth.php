<?php
if (session_status() === PHP_SESSION_NONE) { /* ¿Sesión activa pero no iniciada? */
    session_start(); /* Inicia la sesión */
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>