<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/registrar.css">
	<meta name="viewport" content="width=device-width, initial scale=1" >
	<meta charset="utf-8">
	<title>Registrar</title>
</head>
<body style="background: url('img/fondo.png') no-repeat center center fixed; background-size: cover;">
	
	<div class="goku-contenedor">
		<div class="goku">
			<img src="css/1.png">
		</div>
		<div class="goku-sombra"></div>
	</div>

	<div class="container">
		<div class="form__top">
			<hr><h2>Regístrate <span>Amiguito!</span></h2><hr>
			<h2><span>Selecciona</span> un personaje:</h2>
		</div>		

		<form action="procesos1.php" class="form__reg" method="POST" enctype="multipart/form-data">

			<div class="icono">
				<center>
				<div class="rating">
					<div class="personajes">
						<img src="fotoperfil/1.png">Mario
						<input type="radio" name="foto" value="fotoperfil/1.png" id="star1"><label for="star1"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/2.png">Luigi
						<input type="radio" name="foto" value="fotoperfil/2.png" id="star2"><label for="star2"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/3.png">Peach
						<input type="radio" name="foto" value="fotoperfil/3.png" id="star3"><label for="star3"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/4.png">Daisy
						<input type="radio" name="foto" value="fotoperfil/4.png" id="star3"><label for="star3"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/5.png">Yoshi
						<input type="radio" name="foto" value="fotoperfil/5.png" id="star3"><label for="star3"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/6.png">Koopa
						<input type="radio" name="foto" value="fotoperfil/6.png" id="star3"><label for="star3"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/7.png">D.K
						<input type="radio" name="foto" value="fotoperfil/7.png" id="star3"><label for="star3"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/8.png">Toad
						<input type="radio" name="foto" value="fotoperfil/8.png" id="star3"><label for="star3"></label>
					</div>
					<div class="personajes">
						<img src="fotoperfil/9.png">Bowser
						<input type="radio" name="foto" value="fotoperfil/9.png" id="star3"><label for="star3"></label>
					</div>
				</div>
				</center>
			</div>
			<br>
			<input class="input" type="text" name="nombre" placeholder="&#128100;  Nombre de usuario" required autofocus>
            <input class="input" type="password" name="contrasena" placeholder="&#9993;  Contraseña" required>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
</body>
</html>