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
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
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
    <title>Game over</title>

<script src="js/jquery.min.js" type="text/javascript"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <style>.thumbnail{ height: 185px;}
    </style>
</head>
<body style="background: url('img/fondo2.jpeg') no-repeat center center fixed; background-size: cover;">

    <div class="container text-center">
        <br/>
        <div class="row">
           <div class="col-md-3"><img src="poke/Poke.png"/></div> 
            <div class="col-md-6"><h2><div id="Puntaje"><center>
    <h4>
        Arrastra el pokemon correcto al cuadro
    </h4>
    </center>Puntos:0</div></h2></div> 
            
        </div>
        
        <div class="row">
            <div class="col-md-4" id="DragPokemons" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="col-md-4"></div>
        </div>
        
        <div class="row text-center" id="pokemons"></div>
        
    </div>
    <script>
        
	var Pokemons = ["Bulbasaur","Ivysaur","Venusaur","Charmander","Charmeleon","Charizard","Squirtle","Wartortle","Blastoise","Caterpie","Metapod","Butterfree","Weedle","Kakuna","Beedrill","Pidgey","Pidgeotto","Pidgeot","Rattata","Raticate","Spearow","Fearow","Ekans","Arbok","Pikachu","Raichu","Sandshrew","Sandslash","NidoranH","Nidorina","Nidoqueen","Nidoran","Nidorino","Nidoking","Clefairy","Clefable","Vulpix","Ninetales","Jigglypuff","Wigglytuff","Zubat","Golbat","Oddish","Gloom","Vileplume","Paras","Parasect","Venonat","Venomoth","Diglett","Mewtwo"];
        
        
        
    var PokemonsJuego = [],indice,item,tiempo,Puntos=0;
    $(document).ready(function(){ IniciarJuego();});
        
        function IniciarJuego(){
            Pokemons = ["Bulbasaur","Ivysaur","Venusaur","Charmander","Charmeleon","Charizard","Squirtle","Wartortle","Blastoise","Caterpie","Metapod","Butterfree","Weedle","Kakuna","Beedrill","Pidgey","Pidgeotto","Pidgeot","Rattata","Raticate","Spearow","Fearow","Ekans","Arbok","Pikachu","Raichu","Sandshrew","Sandslash","NidoranH","Nidorina","Nidoqueen","Nidoran","Nidorino","Nidoking","Clefairy","Clefable","Vulpix","Ninetales","Jigglypuff","Wigglytuff","Zubat","Golbat","Oddish","Gloom","Vileplume","Paras","Parasect","Venonat","Venomoth","Diglett","Mewtwo"];
            PokemonsJuego = [];
            indice=0;
            item=0;
           
        for(i=0;i<3;i++){
            indice=Math.floor(Math.random()*Pokemons.length);
            item = Pokemons[indice];
            PokemonsJuego.push(item);
            Pokemons.splice(indice,1);
        }
        indice=Math.floor(Math.random()*PokemonsJuego.length);
        item = PokemonsJuego[indice];
            
           $("#pokemons").empty();
           $("#DragPokemons").empty();
            
           clearInterval(tiempo);
            
           $.each(PokemonsJuego, function( i, val ) {
               
            $("#pokemons").append('<div class="col-xs-4 col-md-4" ><a href="#" class="thumbnail"><img src="poke/'+val+'.png" id='+val+' draggable="true" ondragstart="drag(event)" style="cursor:move" /></a></div>');
               
        });
        $("#DragPokemons").append('<a href="#" class="thumbnail"   ></a><h3><span class="label label-danger">'+item+"</span></h3><br/>");
         
        }
function allowDrop(ev) { ev.preventDefault();}
function drag(ev) {ev.dataTransfer.setData("text", ev.target.id);}
function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    if(data==item){
    ev.target.appendChild(document.getElementById(data));      
            Puntos++;
            $("#Puntaje").html('<span class="label label-default">Puntos: '+Puntos+'</span>');
           tiempo=setInterval(function(){ IniciarJuego(); }, 800);
    }else{
        alert("Ups! empezemos de nuevo"); Puntos=0;
        $("#Puntaje").html('Puntos:'+Puntos+'');
        tiempo=setInterval(function(){ IniciarJuego(); }, 800);
    }
}
</script>
</body>

</html>