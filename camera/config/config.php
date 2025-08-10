<?php
$host = "localhost";
$dbname = "tfg_hugo";
$dbuser = "root";
$dbpass = "";

$conexion = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}
?>