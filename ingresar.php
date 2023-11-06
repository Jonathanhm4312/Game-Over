<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/registrar.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1" >
	<title>Login</title>
</head>
<body style="background: url('img/fondo.png') no-repeat center center fixed; background-size: cover;">

<div class="goku-contenedor2">
		<div class="goku">
			<img src="css/5.png">
		</div>
		<div class="goku-sombra"></div>
	</div>

<div class="container2">
		<div class="form__top2">
			<h2>Ingresa <span>Amiguito!</span></h2>
		</div>	

<form action="procesos2.php" method="POST" class="form__reg2" enctype="multipart/form-data">

	<input class="input" type="text" name="nombre" placeholder="&#128100;  Escribe tu nombre aqui!" required autofocus>
    <input class="input" type="password" name="contrasena" placeholder="&#9993;  Escribe tu contraseña aqui!" required>
	<div class="btn__form">
        <input class="btn__submit" type="submit" value="INGRESAR">
    </div>
    <CENTER>
		<div class="p">
		No tienes una cuenta?<a href="registrar.php"> click aqui </a>
		</div>
	</CENTER>
</form>
</div>

</body>
</html>