<?php

	$host= "localhost";
	$user= "root";
	$password= "";
	$database= "game";

	$conexion= new mysqli($host,$user,$password,$database)

			or die('Error de conexion, contacte al administrador');

	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];
	$foto = $_POST["foto"];

	$insertarSQL= "INSERT INTO usuarios(nombre,contrasena,foto,create_at)
	VALUES ('$nombre','$contrasena','$foto',NOW())";

	$resultado = mysqli_query ($conexion,$insertarSQL)
		or die("Error al insertar datos");

		header("location: ingresar.php");
?>



