<?php

	$host= "localhost";
	$user= "root";
	$password= "";
	$database= "game";

	$conexion= new mysqli($host,$user,$password,$database)

			or die('Error de conexion, contacte al administrador');

	$nombre = $_POST['nombre'];
	$resmate = $_POST['resmate'];

	$insertarSQL= "INSERT INTO mate(nombre,resmate,create_at)
	VALUES ('$nombre','$resmate',NOW())";

	$resultado = mysqli_query ($conexion,$insertarSQL)
		or die("Error al insertar datos");

		header("location: mario.php");
?>