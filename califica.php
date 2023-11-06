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
<html>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial scale=1" >
		<title>calificacion</title>
 		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="stylesheet" href="css/style.css">
		<link rel="css/bootstrap.css" rel="stylesheet">
		<link rel="css/font-awesome.css" rel="stylesheet">
		<link href="css/rating.css" rel="stylesheet">

</head>
<header>

</header>
<section class="estilotabla">
<h1 class="calificatext">CALIFICA TU EXPERIENCIA DE 1 A 5 ESTRELLAS</h1>
 <body style="background: url('img/fondo1.jpg') no-repeat center center fixed; background-size: cover;">
<center>
	<form action="procesocalificar.php" method="POST">
	<center>
	<div class="estrellas">
		<div class="container" >
			<div class="ratings">
				<input type="radio" name="puntuacion" id="rating" value="1">
				<input type="radio" name="puntuacion" id="rating" value="2">
				<input type="radio" name="puntuacion" id="rating" value="3">
				<input type="radio" name="puntuacion" id="rating" value="4">
				<input type="radio" name="puntuacion" id="rating" value="5">
			</div>

		</div>
	</div>
	</center>
	<input type="submit" name="boton" value="enviar" class="botonanimado">

	</br>
	<input type="text" class="oculto" name="nombre" value="<?php echo $_SESSION['nombrepersona']; ?>">

			<style type="text/css">
				.oculto{
					display: none;
				}
			</style>
</form>
</center>
</section>

<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/rating.js"></script>
	</section>
	<script>
	$('.ratings').rating(function(vote, event){
			$.ajax({
				method: 'POST',
				url: 'insrating.php',
				data: {vote:vote}
			}).done(function(info){
				$('.info').html("punteo: <b>"+info+"</b>")
			})
		 })

	</script>
</body>
</html>