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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inicio</title>
  <link rel="stylesheet" type="text/css" href="css/inicio.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/stylequimica.css">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src=".js/bootstrap.js"></script>
  <script src="js/main.js"></script>
  <script src=".js/p.min.js"></script>

  <body>

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
            echo "Bienvenido ".$_SESSION['nombrepersona'];
             ?></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="inicio.php">INICIO</a></li>
                <li><a href="califica.php">CALIFICANOS</a></li>
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





<center>
<div class="titulo">
<img src="img/mate.png">
</div>

<div class="instrucciones">
  <img src="img/instrucciones.jpg">
</div>
</center>



<div class="estefany">
<img src="img/monedas.jpg">
<input type="submit" value="Opciones" class="btn-danger"  onclick="botones()">
</div>
<form action="porcesomate.php" class="botonesxd" method="POST">
  <center>
  <div id="uno">
  <input type="radio"  value="2" name="resmate"><br><label>2</label>
</div>

  <div id="dos">
  <input type="radio"  value="5" name="resmate"><br><label>5</label>
</div>


 <div id="tres">
  <input type="radio"  value="4" name="resmate"><br><label>4</label>
</div>
</center>

<center>
<input type="submit" class="btn-danger" id="cuatro">
</center>

<input type="text" class="oculto" name="nombre" value="<?php echo $_SESSION['nombrepersona']; ?>">

      <style type="text/css">
        .oculto{
          display: none;
        }
      </style>
</form>

<div class="estefany2">
<img src="img/menoz.jpg">
<input type="submit" value="Opciones" class="btn-danger"  onclick="botones2()">


</div>
<form action="porcesomate.php" class="botonesxd" method="POST">
  <center>
  <div id="cinco">
  <input type="radio"  value="1" name="resmate"><br><label>1</label>
  </div>

  <div id="seis">
  <input type="radio"  value="5" name="resmate"><br><label>5</label>
</div>


 <div id="siete">
  <input type="radio"  value="90" name="resmate"><br><label>90</label>
</div>
</center>

<center>
<input type="submit" class="btn-danger" id="ocho">
</center>

  <input type="text" class="oculto" name="nombre" value="<?php echo $_SESSION['nombrepersona']; ?>">

      <style type="text/css">
        .oculto{
          display: none;
        }
      </style>
</form>






  </body>
</head>


</html>

 <style type="text/css">
*{
  background-repeat: no-repeat;
  background-size:100% 100%;
  background-attachment: fixed;   
  padding: 0px;
  margin: 0px;
  
}

$color:#fff;
.titulo{
  width: 100%;
  height: 250px;
 

}
.titulo img{
  width: 50%;
  height: 240px;
  margin: auto;
}
.instrucciones{
  width: 100%;
  height: 400px;

}
.instrucciones img{
  width: 70%;
  height: 350px;

}
.estefany{
  width: 100%;
  height: 400px;
  background: #ccc;

}
.estefany img{
  width: 80%;
  height: 390px;
}
.estefany input{
  padding: 3px;
  border-radius: 4px;

}
#uno{
  display: none;
}
#dos{
  display: none;
}
#tres,#cinco,#seis,#siete{
  display: none;
}
#cuatro,#ocho{
  display: none;
}

@media screen and (max-width: 480px){
body{
  background: #fff;
}
.titulo{
  width: 100%;
  height: 150px;
  background: #de0000;
}
.titulo img{
  width: 90%;
  height: 140px;
  margin-left: 5px;
}
.instrucciones{
  width: 100%;
  height: 200px;

}
.instrucciones img{
  width: 100%;
  height: 180px;

}
.estefany{
  width: 100%;
  height: 200px;
  background: #ccc;

}
.estefany img{
  width: 70%;
  height: 200px;
}

.estefany input{
  padding: 3px;
  border-radius: 4px;
  width: 25%;
  margin-left: 0px;

}
.estefany2{
  width: 100%;
  height: 200px;
  background: #ccc;
  margin-top: 50px;

}
.estefany2 img{
  width: 70%;
  height: 200px;
}

.estefany2 input{
  padding: 3px;
  border-radius: 4px;
  width: 25%;
  margin-left: 0px;

}
.botonesxd{
  width: 100%;
  height: 60px;
  background: #fff;
}
#uno,#dos,#tres{
border:solid #ff8000;
width: 20%;
margin-left: 10%;
float: left;
margin-top: 5px;
background: rgb(0,0,0,.8);
color: #fff;
border-radius: 8px;
}

.btn-danger{
  width: 40%;
  height: 30px;
  border-radius: 4px;
  margin-top: 5px;
}
#cinco,#seis,#siete{
border:solid #ff8000;
width: 20%;
margin-left: 10%;
float: left;
margin-top: 10px;
background: rgb(0,0,0,.8);
color: #fff;
border-radius: 8px;
}
}
</style>


<script type="text/javascript">
 function botones(){
    $('#uno').show(3000);
     $('#dos').show(3000);
      $('#tres').show(3000);
       $('#cuatro').show(3000);

 }
 function botones2(){
        $('#cinco').show(3000);
         $('#seis').show(3000);
          $('#siete').show(3000);
           $('#ocho').show(3000);
 }
</script>

 