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
	<meta name="viewport" content="width=device-width, initial scale=1" >
	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
	  <link href="img/icono.png" rel="icon" type="image/png"/>
	<link rel="stylesheet" type="text/css" href="css/style_rompecabezas.css">
	<title>Game over</title>
</head>
<body style="background: url('img/f1.jpg') no-repeat center center fixed; background-size: cover;">

	<center>
    <h4>
        Arma el rompecabezas arrastrando las piezas
    </h4>
    </center>
		<svg width="600" height="600" id="entorno">
		<g id="fondo"><image href="rompecabezas/pikachu.png" width="400" height="400" x="200" y="100"></g>

	<g class="padre" id="0"><image href="rompecabezas/1.png" class="movil"></g>
	<g class="padre" id="1"><image href="rompecabezas/2.png" class="movil"></g>
	<g class="padre" id="2"><image href="rompecabezas/3.png" class="movil"></g>
	<g class="padre" id="3"><image href="rompecabezas/4.png" class="movil"></g>
	<g class="padre" id="4"><image href="rompecabezas/5.png" class="movil"></g>
	<g class="padre" id="5"><image href="rompecabezas/6.png" class="movil"></g>
	<g class="padre" id="6"><image href="rompecabezas/7.png" class="movil"></g>
	<g class="padre" id="7"><image href="rompecabezas/8.png" class="movil"></g>
	<g class="padre" id="8"><image href="rompecabezas/9.png" class="movil"></g>
</svg>
<audio id="win" src="win.mp3"></audio>
<script type="text/javascript" src="js/rompecabezas.js"></script>

<style type="text/css">
	*{
	background-repeat: no-repeat;
	background-size:100% 100%;
	background-attachment: fixed;
	margin: 0;
	padding: 0;
	font-family: arial;
	}

	body{
		background: url(img/1.gif);
	}
</style>

</body>
</html>