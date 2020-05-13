<?php
session_start();
if (!$_SESSION['logado']) {
	header("Location: login.php?error=true");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='css/maps.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css'/>
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> maps</title>

   
</head>


  <body onload="getLocation()">
<header>


     <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="#"> Fastbook</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="livro.php">livro  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="webcam.php">web foto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="maps.php">endereço</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="sair.php">sair</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="buscar">
        </form>
      </div>
    </nav>
</header>
    <div class="container" >
<br>
  			<center><h4>Digite o endereço aonde o pedido sera entregue</h4></center>
        <center><h5 class="text-danger">Estamos pegando seus dados de latitude e longetude</h5></center>
<form method="POST" action="processa_cad.php">
	<div class="form-control">
	<div class="row">
		    <div class="form-group col-md-6">

			<label>Nome: </label>
			<input type="text"   class="form-control" name="name" placeholder="Nome da Empresa ou Filial">

			<label>Endereço: </label>
			<input type="text"   class="form-control" name="address" placeholder="Digite o número e o Logradouro">
				</div>
				    <div class="form-group col-md-6">
			<label>Latitude: </label>
			<input type="text"  id="lat" class="form-control"  name="lat" placeholder="Digite a latitude">

			<label>Longitude: </label>
			<input type="text" id="long"  class="form-control" name="lng" placeholder="Digite a mensagem">

	</div>
			</div>
						<button  class="btn btn-success"  type="submit" value="Cadastrar"> enviar</button>
             <a class="btn btn-success" class="text-white" onclick="getLocation()">ver dados de localização</a>
 	</div>
		</form>
		<br>  			<center><h5>  localização do seu endereço</h5></center>

    <div  id="map"></div><br><br>


​
​
<p id="demo"></p>
​



























 <script type="text/javascript">
      

 var lat = document.getElementById("lat");
var long = document.getElementById("long");

var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}


function showPosition(position) {
  long.value =  position.coords.longitude;
  lat.value =  position.coords.latitude;
//   x.innerHTML = "Latitude: " + position.coords.latitude +
//   "<br>Longitude: " + position.coords.longitude;
//
}

    </script>
<script type="text/javascript" src="js/maps.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdO2VNVcW9t_LIaeSFTCx5iiWRNna4_uY&callback=initMap">
    </script>










     </div>


</body>
</html>