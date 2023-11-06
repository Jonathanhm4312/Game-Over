<?php

	$host= "localhost";
	$user= "root";
	$password= "";
	$database= "game";

	$conexion= new mysqli($host,$user,$password,$database)

			or die('Error de conexion, contacte al administrador');

	$nombre = $_POST['nombre'];
	$puntuacion = $_POST['puntuacion'];

	$insertarSQL= "INSERT INTO punteos(nombre,puntuacion,create_at)
	VALUES ('$nombre','$puntuacion',NOW())";

	$resultado = mysqli_query ($conexion,$insertarSQL)
		or die("Error al insertar datos");

		header("location: inicio.php");
?>