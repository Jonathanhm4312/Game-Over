<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "game";

$conexion = new mysqli($host, $user, $password, $database) or die('Error de conexion, contacte al administrador');

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

$sentenciaSQL = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contrasena = '$contrasena'";

$resultado = $conexion->query($sentenciaSQL);

if ($resultado->num_rows > 0) {
    while ($registros = $resultado->fetch_array()) {
        $nombre = $registros['nombre'];
        $fotografia = $registros['foto'];
        $_SESSION['nombrepersona'] = $nombre;
        $_SESSION['foto'] = $fotografia;
        header('Location: inicio.php');
        exit; // Es importante salir del script después de la redirección para evitar problemas
    }
} else {
    echo "<script>alert('datos incorrectos por favor ingresar de nuevo');location.href='ingresar.php';</script>";
}
?>