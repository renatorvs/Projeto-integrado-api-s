<?php 

session_start();

if (!$_SESSION['logado']) {
	header("Location: login.php?error=true");
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <link rel="stylesheet" href="../assets/css/estilo.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>web cam</title>


    <style type="text/css">

    </style>
</head>
<body >
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
            <a class="nav-link" href="livro.php">livro</a>
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

<main class="container">
	<br>
<h1> Web camera tira uma foto imediata </h1>
<h2 class="text-success">Anexe para podermos saber que esta comprabdo nossos livros.</h2>
<div class="card">
		<div class="card-body">
			<div class="row">
				    <div class="col-md-6">
			<span class="text-primary">Web Espelho.</span> <br><br>
			<video id="player" width=320 height=240 controls autoplay></video><br><br>
			<button class="btn btn-success btn-lg" id="capture">tira foto</button>
		</div>
						    <div class="col-md-6">
			<span class="text-primary" >Web resultado.</span> <br><br>

<canvas id="snapshot" width=320 height=240></canvas><br><br>
<button  class="btn btn-success btn-lg block" onclick="download_image()">
Download
</button>
			</div>
	</div></div>
</div>






</main>



   


<script src="js/webcam.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>