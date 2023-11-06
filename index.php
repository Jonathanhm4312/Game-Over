<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icono.css">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script src="js/p.min.js"></script>

    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css"> 

    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
    <script src="plugins/jquery-3.3.1.min.js"></script>    

    <script src="js/principal.js"></script>

  </head>
  <body>
    <body>
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6">
            <a href="registrar.php"><button type="button" class="btn btn-warning"><h3>Registrar</h3></button></a>
          </div>
          <div class="col-md-6">
            <a href="ingresar.php"><button type="button" class="btn btn-warning"><h3>Ingresar</h3></button></a>
          </div>
        </div>
      </div>

    </body>
    <style>
    body{
      background: url(img/cara.jpg) center center fixed;
      background-size: cover;
    }

    .row{
      margin-top: 40vh;
    }
      .boton{
        width: 200px;
        height: 150px;
        font-size: 25px;
      }

      @media screen and (max-width: 700px) {
      	button{
      		width: 60%;
      		height: 120px;
      	}
        .row{
          margin-top: 19vh;
        }
        .col-md-6{
        	margin-top: 50px;
        }
      }
    </style>

  </body>
</html>
