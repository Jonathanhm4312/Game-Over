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

 <!DOCTYPE html>
 <html lang="es">
 <head>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-3.1.0.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="img/icono.png" rel="icon" type="image/png"/>

  <link rel="stylesheet" type="text/css" href="css/inicio.css">
  <meta charset="utf-8">      
  <meta name="viewport" content="width=device-width, initial scale=1" >                           
  <title>GAME OVER</title>
 </head>
 <body style="background: url('img/f6.jpg') no-repeat center center fixed; background-size: cover;">
   
   <div class="container">
    <br>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fuid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a href="inicio.php" class="navbar-brand"><?php
            echo "Bienvenido a game over ".$_SESSION['nombrepersona'];
             ?></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="inicio.php">INICIO</a></li>
                <li><a href="califica.php">CALIFICANOS</a></li>
                <li><a href="queja.php">QUEJARSE</a></li>
                <li><a href="salir.php">SALIR</a></li>
              </ul>
            </div>

        </div>
      </nav>
    </header>
  </div>

<div class="cuadro">
  <div class="moneda">
    <img src="img/moneda.gif">
  </div>
  <div class="foto">
    <?php
      echo '<img class="img-circle" src="'.$_SESSION["foto"].'"width="180" height="180">';
    ?>
  </div>
  <div class="moneda2">
    <img src="img/moneda.gif">
  </div>
</div>

<div class="instrucciones">
  <center>
  <h4>Bienvenido <span>escoge un juego!</span></h4>
  </center>
</div>

        <div class="grupo_iconos_juegos_home centrar">

          <a href="php/niveles/niveles_reloj" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home">Aprende del reloj</p>  
              <center>      
                <img src="img/reloj.gif"  class="imagen_modo_juego" alt="" >   
              </center>      
              </div>
          </a>

          <a href="rompecabezas.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Rompecabezas</p>   
              <center>     
                <img src="img/rompe.gif"  class="imagen_modo_juego" alt="" >     
                </center>    
              </div>
          </a>

          <a href="pokemon.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Adivina el pokemon</p>   
              <center>     
                <img src="img/pokemon.gif"  class="imagen_modo_juego" alt="" >   
              </center>      
              </div>
          </a>


        </div>

        <div class="grupo_iconos_juegos_home centrar">
        
        <a href="dinosaurio.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Dinosaurio</p>   
              <center>     
                <img src="img/dinosaurio.gif"  class="imagen_modo_juego" alt="" >   
              </center>      
              </div>
          </a>

          <a href="php/niveles/niveles_suma" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Matemáticas</p>    
              <center>     
                <img src="img/mate.gif"  class="imagen_modo_juego" alt="" >      
              </center>   
              </div>
          </a>

          <a href="memoria.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Memoria</p>   
              <center>  
                <img src="img/memoria.gif"  class="imagen_modo_juego" alt="" >    
              </center>     
              </div>
          </a>

        </div>

        <div class="grupo_iconos_juegos_home centrar">

        <a href="colores.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Adivina el color</p>  
              <center>      
                <img src="img/colores2.gif"  class="imagen_modo_juego" alt="" > 
              </center>        
              </div>
        </a>

        <a href="particulas.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Particulas</p>    
              <center>     
                <img src="img/particulas.gif"  class="imagen_modo_juego" alt="" >      
              </center>   
              </div>
          </a>

          <a href="php/niveles/niveles_contar" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Aprende a contar</p>  
              <center>      
                <img src="img/mate3.gif"  class="imagen_modo_juego" alt="" > 
              </center>        
              </div>
          </a>

        </div>

 </body>
 </html>