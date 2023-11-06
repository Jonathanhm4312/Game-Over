<?php
session_start();
error_reporting(0);
$varSesion = $_SESSION['nombrepersona'];
$varSesion = $_SESSION['foto'];

  if($varSesion ==null || $varSesion==''){
    echo "<center><h1>Error 404</h1> por favor contactece con el administrador</center>";
    die();
  }
 ?>
<?php require_once "php/vistas/parte_superior.php" ?>
<div class="posicion_btn_volver">
        <a href="inicio.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-left btn_volver" viewBox="0 0 40 40" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M20 15h-8v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h8a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1z" />
            </svg>
        </a>
</div>
<!DOCTYPE html>
<html lang="es">
<head>
<script src="js/jquery.min.js"></script>
  <script src="js/jquery-3.1.0.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/inicio.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta charset="utf-8">      
  <meta name="viewport" content="width=device-width, initial scale=1" >
	<title>particulas</title>
</head>

<style type="text/css">
	body{
		background: #000;
	}
</style>
<body id="particles-js">

	<script src="js/particles.js"></script>
	<script src="js/particulas.js"></script>

</body>
</html>